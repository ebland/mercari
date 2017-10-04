# Task
Based on the following conditions and requirements, create a class for promotional banners and implement the appropriate test code.
Additionally, please attach any comments related to your thought process, any concerns you had,etc. in a PR comment.

# Conditions
* In addition to the Standard Library, you may use any publicly available open-source libraries.
  * However, please refrain from using any web application frameworks, as this would make it difficult to judge your skill.
* Submit your class and test code, you do not need to submit a web application.

# Requirements
* Whether or not a banner is displayed is determined as follows:
  * A banner should be displayed during its display period
  * Even before the display period, a banner should be displayed if the user’s device has a specific IP address (allowed IP)
    * The allowed IPs will be 10.0.0.1 and 10.0.0.2 
  * In all other instances, no banner should be displayed
* Because a banner’s display period will change depending on the campaign, please allow the period to be set for each banner instance 
* A banner’s display period should be passed in the form of Start Date/Time and End Date/Time, as ISO 8601 character strings 
  * Ex: Start Date/Time = 2014-08-10T12:00:00+0900, End Date/Time = 2014-08-10T12:00:00+0900
