/**
 * Sharesa Space Tracking Logic (Meta Hybrid: Pixel + CAPI)
 * Version 2.0 - Optimized for Event Match Quality (EMQ)
 */
class SharesaTracking {
    constructor() {
        this.config = window.SHARESASPACE.meta;
        this.syncIdentity();
    }

    /**
     * Helper: Get Cookie Value
     */
    getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
        return null;
    }

    /**
     * Helper: Set Cookie (30 days default)
     */
    setCookie(name, value, days = 30) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "; expires=" + date.toUTCString();
        document.cookie = name + "=" + (value || "") + expires + "; path=/; SameSite=Lax";
    }

    /**
     * Sync FBC and Persistent Identity
     */
    syncIdentity() {
        // 1. Capture fbclid from URL
        const urlParams = new URLSearchParams(window.location.search);
        const fbclid = urlParams.get('fbclid');
        if (fbclid) {
            const fbc = `fb.1.${Date.now()}.${fbclid}`;
            this.setCookie('_fbc', fbc);
        }
    }

    /**
     * Generate Unique Event ID for Deduplication
     */
    generateEventId(eventName) {
        return `sharesa-${eventName.toLowerCase()}-${Date.now()}`;
    }

    /**
     * SHA-256 Hashing Utility (Standard for Browser)
     */
    async hashPII(data) {
        if (!data) return null;
        const msgUint8 = new TextEncoder().encode(data.trim().toLowerCase().replace(/\s+/g, ''));
        const hashBuffer = await crypto.subtle.digest('SHA-256', msgUint8);
        const hashArray = Array.from(new Uint8Array(hashBuffer));
        return hashArray.map(b => b.toString(16).padStart(2, '0')).join('');
    }

    /**
     * Trigger Hybrid Event (Browser + Server)
     */
    async track(eventName, customData = {}, userData = {}) {
        const eventId = this.generateEventId(eventName);

        // Retrieve background identities
        const fbp = this.getCookie('_fbp');
        const fbc = this.getCookie('_fbc');
        const sharesa_em = this.getCookie('sharesa_em');
        const sharesa_ph = this.getCookie('sharesa_ph');

        const refinedUserData = {
            fbp: fbp,
            fbc: fbc,
            em: userData.em || sharesa_em,
            ph: userData.ph || sharesa_ph,
            fn: userData.fn,
            external_id: this.config.externalId || this.getCookie('sharesa_external_id'),
            ...userData
        };

        // 1. Browser Tracking (Meta Pixel)
        if (window.fbq) {
            fbq('track', eventName, customData, { eventID: eventId });
        }

        // 2. Server Tracking (Meta CAPI) via Proxy
        try {
            const response = await fetch(this.config.trackUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': this.config.csrf
                },
                body: JSON.stringify({
                    event_name: eventName,
                    event_id: eventId,
                    custom_data: customData,
                    user_data: refinedUserData
                })
            });
            
            const result = await response.json();
            
            if (result.success) {
                console.log(`✅ [CAPI] Event "${eventName}" transmitted successfully.`, { eventId, userData: refinedUserData });
            }

            return result;
        } catch (error) {
            console.error('Tracking Error:', error);
        }
    }

    /**
     * Persist Identity (Call after form success)
     */
    async saveIdentity(email, phone) {
        if (email) {
            const hashedEmail = await this.hashPII(email);
            this.setCookie('sharesa_em', hashedEmail);
        }
        if (phone) {
            // Basic formatting before hashing in browser
            let cleanPhone = phone.replace(/[^0-9]/g, '');
            if (cleanPhone.startsWith('0')) cleanPhone = '62' + cleanPhone.substring(1);
            else if (!cleanPhone.startsWith('62')) cleanPhone = '62' + cleanPhone;
            
            const hashedPhone = await this.hashPII(cleanPhone);
            this.setCookie('sharesa_ph', hashedPhone);
        }
    }
}

window.trackingService = new SharesaTracking();

// Auto-track ViewContent
document.addEventListener('DOMContentLoaded', () => {
    const path = window.location.pathname;
    if (path.includes('/services') || path.includes('/portfolios')) {
        window.trackingService.track('ViewContent', {
            content_name: path.split('/').pop(),
            content_category: 'Service/Portfolio'
        });
    }
});
