# Simplified member admin for SilverStripe 
For usage with simple SilverStripe websites where no complex group/role management is needed.
The default security admin will be disabled and replaced by a simple model admin for the member records. The members cms fields will show only a few relevant fields.

A few parts of the behaviour can be customized through the config api, see the defaults below.

```yaml
lvl51\sma\SimplifiedMemberAdmin:
  disable_export: true
  disable_print: true
  remove_member_fields:
    - LastVisited
    - Locale
    - DateFormat
    - TimeFormat
    - Permissions
    - FailedLoginCount
    - RegisterHash
    - RegisterExpired
    - State
    - StateChanged
```

## Maintainer
- Daniel Kliemsch <dk@lvl51.de>