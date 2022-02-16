# cearte-issue-to-jira

# Installation

1. Download and Install PHP Composer.

   ``` sh
   curl -sS https://getcomposer.org/installer | php
   ```

2. Next, run the Composer command to install the latest version of php jira rest client.
   ``` sh
   php composer.phar require lesstif/php-jira-rest-client
   ```
    or add the following to your composer.json file.
   ```json
   {
       "require": {
           "lesstif/php-jira-rest-client": "^2.0"
       }
   }
   ```

3. Then run Composer's install or update commands to complete installation. 

   ```sh
   php composer.phar install
   ```

4. After installing, you need to require Composer's autoloader:

   ```php
   require 'vendor/autoload.php';
   ```
   
# Configuration

copy .env.example file to .env on your project root.	

```sh
JIRA_HOST="https://your-jira.host.com"
JIRA_USER="jira-username"
JIRA_PASS="jira-password-OR-api-token"
JIRA_LOG_ENABLED=true
JIRA_LOG_FILE="jira-rest-client.log"
JIRA_LOG_LEVEL="WARNING"

JIRA_REST_API_V3=false

# if TOKEN_BASED_AUTH set to true, ignore JIRA_USER and JIRA_PASS.
TOKEN_BASED_AUTH=false
PERSONAL_ACCESS_TOKEN="your-access-token-here"
```
