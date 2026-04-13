/**
 * Sharesa Space Tracking Logic (Meta Hybrid: Pixel + CAPI)
 */
class SharesaTracking {
    constructor() {
        this.config = window.SHARESASPACE.meta;
    }

    /**
     * Generate Unique Event ID for Deduplication (CariDisini Standard)
     */
    generateEventId(eventName) {
        return `sharesa-${eventName.toLowerCase()}-${Date.now()}`;
    }

    /**
     * Trigger Hybrid Event (Browser + Server)
     */
    async track(eventName, customData = {}, userData = {}) {
        const eventId = this.generateEventId(eventName);

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
                    user_data: {
                        ...userData,
                        external_id: this.config.externalId,
                        fbp: this.config.fbp,
                        fbc: this.config.fbc
                    }
                })
            });
            
            const result = await response.json();
            
            if (result.success) {
                console.log(`✅ [CAPI] Event "${eventName}" transmitted successfully.`, { eventId });
            } else {
                console.warn(`❌ [CAPI] Event "${eventName}" failed to transmit.`, result);
            }

            return result;
        } catch (error) {
            console.error('Tracking Error:', error);
        }
    }
}

window.trackingService = new SharesaTracking();

// Auto-track ViewContent on Services/Portfolio pages
document.addEventListener('DOMContentLoaded', () => {
    const path = window.location.pathname;
    if (path.includes('/services') || path.includes('/portfolios')) {
        window.trackingService.track('ViewContent', {
            content_name: path.split('/').pop(),
            content_category: 'Service/Portfolio'
        });
    }
});
