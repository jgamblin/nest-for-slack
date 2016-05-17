# nest-for-slack
Control Your Nest Thermostat From Slack.

![](http://i.imgur.com/CLf0Ysw.png)

## REQUIREMENTS

* A custom slash command on a Slack team
* A web server running PHP5 with cURL enabled
* A valid SSL certificate for your web server (use https://letsencrypt.org/)
* A copy of nest.class.php from https://github.com/gboudreau/nest-api

## USAGE

* Place the `nest.php`, `sestnest.php` and `nest.class.php` script on a server running PHP5 with cURL and a valid SSL certificate.
* Set up a new custom slash command on your Slack team: https://slack.com/apps/A0F82E8CA-slash-commands
* Under "Choose a command", enter whatever you want for the command. /temp (`nest.php`) and /settemp(`setnest.php`) are easy to remember.
* Under "URL", enter the URL for the script on your server.
* Leave "Method" set to "Post".
* Decide whether you want this command to show in the autocomplete list for slash commands.
* If you do, enter a short description and usage hint.

## WARNING

* Programing might be science; but that's not what I do. I'm a hacker, not a programmer.
* This is also probably a really bad idea. 
