# Email-Based Trial License System

## Overview

Player Tagger now uses an email-based trial system where users request trial keys via email. This gives you visibility into all users from day 1 and allows you to build a contact list.

## How It Works

### User Journey

1. User visits Player Tagger and clicks the Premium badge
2. Sees two email links in the license modal:
   - **"Get 7-Day Free Trial"** (orange button)
   - **"Email Us to Get a License"** (blue button)
3. Clicking either opens their email client with a pre-filled message
4. User sends the email to you
5. You generate and send them a license key
6. User enters the key in the app and starts using premium features

### Trial Keys
- **Format:** `TRIAL-XXXX-XXXX-7D`
- **Duration:** 7 days from activation (not from generation)
- **Features:** Full access to all premium features
- **After expiry:** Reverts to freemium features

### Full License Keys
- **Format:** `PRO-XXXX-XXXX-XXXX` (or legacy `PTAG-XXXX-XXXX-XXXX`)
- **Duration:** Forever (annual subscription at €79/year)
- **Features:** Full access to all premium features
- **Renewal:** Manual (user emails you for renewal)

## Your Workflow

### When Someone Requests a Trial

1. Receive email at `playertagger@pm.me`
2. Open `generate-license-keys.html` in your browser
3. Click **"Generate Trial Key"**
4. Copy the generated key (format: `TRIAL-XXXX-XXXX-7D`)
5. Reply using the template in `email-templates.md`
6. Paste the trial key into the email
7. Send!

**Estimated time:** 1-2 minutes per request

### When Someone Purchases

1. Receive purchase email
2. Confirm payment (€79 via PayPal, Stripe, bank transfer, etc.)
3. Open `generate-license-keys.html`
4. Click **"Generate PRO Key"**
5. Copy the generated key (format: `PRO-XXXX-XXXX-XXXX`)
6. Reply using the purchase template
7. Send the PRO key

**Estimated time:** 2-3 minutes per purchase

## Files Included

- **`generate-license-keys.html`** - Web-based key generator (open in browser)
- **`email-templates.md`** - Copy-paste email response templates
- **`TRIAL-SYSTEM.md`** - This file (system overview)

## Automation Options (Future)

When you have enough users, consider:

### Option 1: Google Apps Script (Free)
- Auto-monitors Gmail inbox
- Generates keys automatically
- Sends templated responses
- Logs to Google Sheet

### Option 2: Zapier/Make (Paid)
- Email trigger → Generate key → Send response
- Cost: ~$20/month for basic plan

### Option 3: Custom Backend
- Simple API endpoint to generate keys
- Email service integration
- Database for tracking

**Recommendation:** Start manual, automate when you reach ~10 requests/week.

## Key Benefits

✅ **Visibility:** You know every user's email from day 1
✅ **No backend required:** Works entirely client-side
✅ **Marketing list:** Build an email list for announcements
✅ **Personal touch:** Direct email contact with early users
✅ **Flexibility:** Easy to offer custom deals or extended trials
✅ **Simple:** No payment integration needed initially

## Pricing Strategy

- **Trial:** 7 days free (all features)
- **Full License:** €79/year
- **Future options:**
  - Club licenses (5 coaches): €199/year
  - Lifetime licenses: €249 one-time
  - Early bird discounts for first 100 users

## Tracking (Optional)

Create a simple spreadsheet to track:

| Email | Type | Key | Date Sent | Expires | Payment Status |
|-------|------|-----|-----------|---------|---------------|
| coach@club.com | TRIAL | TRIAL-A3F2-9K1M-7D | 2026-06-05 | 2026-06-12 | - |
| manager@team.ie | PRO | PRO-B7G4-2N8P-5Q9R | 2026-06-06 | Never | Paid €79 |

This helps you:
- Follow up with expired trials
- Track conversion rate
- Send renewal reminders
- Analyze which clubs are using it

## Support Queries

Common questions and responses:

**Q: Can I extend my trial?**
A: Sorry, trials are one-time only. However, I can offer you a 20% discount if you upgrade today!

**Q: My trial expired, can I get another?**
A: Trials are one per user, but I'd be happy to set you up with the full license. It's €79/year for unlimited access.

**Q: I lost my license key.**
A: No problem! Your key is: [look up in spreadsheet]. Let me know if you need help.

**Q: Can I get a refund?**
A: [Your refund policy - suggest 30-day money-back guarantee]

## Launch Checklist

- [ ] Test trial key generation in `generate-license-keys.html`
- [ ] Test PRO key generation
- [ ] Verify keys work in the app
- [ ] Test email links in license modal
- [ ] Review email templates
- [ ] Set up tracking spreadsheet (optional)
- [ ] Add `playertagger@pm.me` to your email client
- [ ] Test full user flow end-to-end

## Questions?

The license system is implemented in `index.html`:
- Lines 1349-1410: License validation and checking
- Lines 1461-1520: Key activation logic
- Lines 1078-1124: License modal UI

Key validation:
- Trial keys: Simple format check
- PRO keys: Format + checksum validation (sum of first 8 chars divisible by 7)
- Legacy PTAG keys: Still supported for backward compatibility
