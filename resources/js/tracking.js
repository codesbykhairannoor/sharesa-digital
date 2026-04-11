/**
 * Sharesa Space Tracking Logic (Meta Hybrid: Pixel + CAPI)
 */
class SharesaTracking {
    constructor() {
        this.config = window.SHARESASPACE.meta;
    }

    /**
     * Generate Unique Event ID for Deduplication
     */
    generateEventId() {
        return 'evt_' + Math.random().toString(36).substr(2, 9) + Date.now();
    }

    /**
     * Trigger Hybrid Event (Browser + Server)
     */
    async track(eventName, customData = {}, userData = {}) {
        const eventId = this.generateEventId();

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
            
            return await response.json();
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
