#!/usr/bin/env python3

"""
Player Tagger License Key Generator (Python version)

Generates valid license keys in format: PTAG-XXXX-XXXX-XXXX
Validation rule: Middle 8 characters (parts 2 & 3) ASCII sum divisible by 7
"""

import random
import string
import sys
from datetime import datetime

def generate_license_key():
    chars = string.ascii_uppercase + string.digits

    # Generate part 1 (can be random)
    part1 = ''.join(random.choice(chars) for _ in range(4))

    # Generate parts 2 and 3 with checksum validation
    while True:
        part2 = ''.join(random.choice(chars) for _ in range(4))
        part3 = ''.join(random.choice(chars) for _ in range(4))

        # Check if valid (ASCII sum divisible by 7)
        checksum = part2 + part3
        ascii_sum = sum(ord(char) for char in checksum)

        if ascii_sum % 7 == 0:
            return f"PTAG-{part1}-{part2}-{part3}"

def generate_licenses_with_metadata(count, customer_name=None, email=None):
    """Generate licenses with optional customer metadata"""
    licenses = []

    for i in range(count):
        license_key = generate_license_key()
        metadata = {
            'license_key': license_key,
            'generated_date': datetime.now().isoformat(),
            'customer_name': customer_name or '',
            'email': email or '',
            'status': 'active',
            'expiry_date': ''  # Set manually or calculate 1 year from activation
        }
        licenses.append(metadata)

    return licenses

def save_to_csv(licenses, filename='licenses.csv'):
    """Save licenses to CSV file"""
    import csv

    with open(filename, 'w', newline='') as f:
        if licenses:
            writer = csv.DictWriter(f, fieldnames=licenses[0].keys())
            writer.writeheader()
            writer.writerows(licenses)

    print(f"\n💾 Saved to {filename}")

if __name__ == '__main__':
    count = int(sys.argv[1]) if len(sys.argv) > 1 else 1
    export_csv = '--csv' in sys.argv

    print('\n🔑 Player Tagger License Generator')
    print('=' * 40)
    print(f'\nGenerating {count} license key(s)...\n')

    if export_csv:
        licenses = generate_licenses_with_metadata(count)
        for i, lic in enumerate(licenses, 1):
            print(f"{i}. {lic['license_key']}")
        save_to_csv(licenses)
    else:
        for i in range(count):
            license = generate_license_key()
            print(f"{i + 1}. {license}")

    print(f'\n✓ Done! Generated {count} valid license key(s).')
    print('\nFormat: PTAG-XXXX-XXXX-XXXX')
    print('Price: €79.99/year per license')
    if not export_csv:
        print('\nTip: Use --csv flag to export with metadata\n')
