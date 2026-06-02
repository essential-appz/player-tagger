# License Key Generation Guide

This guide explains how to generate and manage license keys for Player Tagger Premium.

## Overview

**License Format:** `PTAG-XXXX-XXXX-XXXX`
- Prefix: `PTAG-`
- Three segments of 4 characters each (A-Z, 0-9)
- Validation: Middle 8 characters ASCII sum must be divisible by 7

**Pricing:** €79.99 per year per license

## Quick Start

### Generate 1 License Key

**Using Node.js:**
```bash
node generate-license.js
```

**Using Python:**
```bash
python3 generate-license.py
```

### Generate Multiple Keys

**Generate 10 keys:**
```bash
node generate-license.js 10
# or
python3 generate-license.py 10
```

**Generate 50 keys with CSV export:**
```bash
python3 generate-license.py 50 --csv
```
This creates `licenses.csv` with metadata fields for tracking.

## Tools Provided

### 1. `generate-license.js` (Node.js)

Simple command-line generator.

**Usage:**
```bash
node generate-license.js [count]
```

**Examples:**
```bash
# Generate 1 license
node generate-license.js

# Generate 25 licenses
node generate-license.js 25
```

### 2. `generate-license.py` (Python)

Enhanced generator with CSV export and metadata tracking.

**Usage:**
```bash
python3 generate-license.py [count] [--csv]
```

**Examples:**
```bash
# Generate 1 license
python3 generate-license.py

# Generate 100 licenses
python3 generate-license.py 100

# Generate 50 licenses with CSV metadata
python3 generate-license.py 50 --csv
```

**CSV Export includes:**
- `license_key`: The generated key
- `generated_date`: ISO timestamp
- `customer_name`: Empty (fill manually)
- `email`: Empty (fill manually)
- `status`: `active` (update as needed)
- `expiry_date`: Empty (set to 1 year from activation)

## License Management Workflow

### 1. Generate License Keys
```bash
python3 generate-license.py 100 --csv
```

### 2. Track in Spreadsheet
Open `licenses.csv` in Excel/Google Sheets and add:
- Customer name
- Email address
- Purchase date
- Activation date
- Expiry date (1 year from activation)
- Status (active/expired/revoked)
- Payment reference
- Notes

### 3. Distribute to Customers
- Send license key via email
- Include activation instructions
- Store customer record in CRM/spreadsheet

### 4. Customer Activates
Customer enters key in Player Tagger app:
1. Click Premium badge
2. Click "Enter License Key"
3. Enter: `PTAG-XXXX-XXXX-XXXX`
4. Click "Activate License"

### 5. Track Status
Update your CSV/spreadsheet:
- Mark as activated
- Set expiry date
- Update status as needed

## Validation Logic

The app validates license keys using this algorithm:

```javascript
function validateLicenseKey(key) {
    // Format: PTAG-XXXX-XXXX-XXXX
    const pattern = /^PTAG-[A-Z0-9]{4}-[A-Z0-9]{4}-[A-Z0-9]{4}$/;
    if (!pattern.test(key)) return false;

    // Checksum: Middle 8 chars ASCII sum divisible by 7
    const parts = key.split('-');
    const checksum = parts[1] + parts[2]; // Parts 2 and 3
    let sum = 0;
    for (let char of checksum) {
        sum += char.charCodeAt(0);
    }

    return sum % 7 === 0;
}
```

## Security Notes

⚠️ **IMPORTANT:**
- Never commit `licenses.csv` or any license files to Git
- Store customer data securely (encrypted database or secure CRM)
- Keep backup of license records
- The `.gitignore` file prevents accidental commits
- Consider using a proper license management system for production

## License Storage

**In the app (browser localStorage):**
- Key: `premiumLicense`
- Value: `PTAG-XXXX-XXXX-XXXX`

**Your records should include:**
- License key
- Customer details
- Purchase/activation dates
- Payment information
- Expiry tracking

## Bulk Operations

**Generate 1000 licenses for a sales campaign:**
```bash
python3 generate-license.py 1000 --csv
```

**Pre-generate licenses for different tiers:**
```bash
python3 generate-license.py 100 --csv  # Rename to licenses-tier1.csv
python3 generate-license.py 50 --csv   # Rename to licenses-tier2.csv
```

## Testing

**Test a generated key in the app:**
1. Open Player Tagger
2. Click Premium badge
3. Enter generated key
4. Verify activation message appears
5. Verify premium features unlock

**Validate format programmatically:**
```bash
node -e "console.log(/^PTAG-[A-Z0-9]{4}-[A-Z0-9]{4}-[A-Z0-9]{4}$/.test('PTAG-ABCD-EFGH-IJKL'))"
```

## Future Enhancements

Consider implementing:
- Online license validation API
- Automatic expiry enforcement
- License renewal system
- Multi-device license management
- Usage analytics per license
- License revocation capability

## Support

For license-related issues:
- Verify key format matches `PTAG-XXXX-XXXX-XXXX`
- Check ASCII sum validation (middle 8 chars)
- Ensure no spaces or special characters
- Verify customer entered key correctly
