# uk.co.compucorp.updaterelationshipbasedondates

This extension introduces a scheduled job which updates relationship statuses based on start and end dates.
When the scheduled job is ran it impacts the is_active column of following relationships in the below described manner




| Relationship Date Conditions                                                | Impact On is_active Column           |
| --------------------------------------------------------------------------- |:------------------------------------:|
| Relationships with a start date in future and end date as null or in future | Value is changed to 0                |
| Relationships with a start date of today or in past and end date as null    | Value is changed to 1                |
| Relationships with a start and end dates both in future                     | Value is changed to 0                |
| Relationships with a start date in past and end date in future              | Value is changed to 1                |

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.0+
* CiviCRM 5.0+

## Installation (Web UI)

This extension can be installed via the Web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl uk.co.compucorp.updaterelationshipbasedondates@https://github.com/compucorp/updaterelationshipbasedondates/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/compucorp/updaterelationshipbasedondates.git
cv en uk.co.compucorp.updaterelationshipbasedondates
```

## Usage

A new daily scheduled job is added as a part of this extension by the name of `Update Relationship cron` which will start running automatically after the extension is installed and it can be run manually as well by navigating to the Administrator -> System Settings -> Scheduled Jobs. Kindly note that if you change some relationship status manually (e.g. make it inactive) - make sure to change dates accordingly, otherwise status will be changed back after next cron run.
