# PHP Consolidation challenge - create a guestbook!
### exercise in week 7 (01/11/2021 - 05/11/2021) of my BeCode training
## Challenge

Using all we have learned so far in PHP we're going to create a  classic 90's guestbook.  
We're storing the messages on our local machine. And we're doing it all in 1 day!

## The objective of this exercise

* Consolidate what we've learned so far
* Store data in files
* Convert arrays/objects to string representation
* Stick to a strict deadline!

## Tools and languages used

|  | Description |
| ----------- | ----------- |
| ![ubuntu](IMG/ubuntu-logo.png) | Running Ubuntu 20.04 |
| ![php-storm](IMG/phpstorm-logo.jpeg) | Working with PHPStorm as IDE |
| ![php](IMG/php-logo.jpg) | Main language used is PHP |
| ![git](IMG/git-logo.png) | Using git for version control |
| ![github](IMG/github-logo.png) | Hosting my files on github |

## No code provided by BeCode

## Timeline

* Day 1 (:date:03/11/2021)
    * assignment was given at 9AM with short briefing and Q&A by coach [Tim](https://github.com/Timmeahj)
    * created the `challenge-php-guestbook` repository on gitHub and `git clone` to local device
    * read through the [readme](https://github.com/becodeorg/ANT-Lamarr-5.34/blob/main/2.The-Hill/php/5.php-guestbook/readme.md) to understand the mission objective
    * created this readme for an overview of the exercise and to keep track of progress
    * what got done so far:
        * created file structure :heavy_check_mark:
        * created .gitignore to ignore .idea folder :heavy_check_mark:
        * created index.php file :heavy_check_mark:
        * first commit and push of the project at :clock9: 09:30AM :heavy_check_mark:
        * created form with title, message and name fields :heavy_check_mark:
        * create new Post with title, message, name, date and timestamp :heavy_check_mark:
        * seperated view from php :heavy_check_mark:
        * seperated header, footer and body :heavy_check_mark:
        * :exclamation: **having trouble saving the messages to a file and then getting the file contents in a readable format**
        * after Lunch, I asked for help from our coach [Tim](https://github.com/Timmeahj) to understand the way json_encode structured the data in the messages.json file
        * I can now `put` and `get` data from `message.json` :heavy_check_mark:
        * I'm showing the messages with the latest message at the top :heavy_check_mark:
        * Finally, got the messages to show where I want them, had to move the `require "body.html";` :heavy_check_mark:
        * had trouble showing the messages up to date after new post submission, something strange was happening when checking the 'isset($_POST)' it now works!!:heavy_check_mark:
        * added a layer of protection by putting all the user input through a `protect()` method which uses the `htmlspecialchars()` :heavy_check_mark:
        * I should now have the core functionalities in there :heavy_check_mark:
          * :exclamation: **although there is still something strange with the first message to be posted after emptying out the json file.**
        * :tada: **Done with the must-haves**
        * :clock5: 5PM end of the day, ran out of time for extras
* Day 2 (:date:04/11/2021)
  * We got the happy news that our deadline was extended by a day!
  * Those of us that got the must-haves done yesterday are now helping our fellow learners in small teams of 4
  * In between helping I'm working on the nice to haves
    * Done today:
      * profanity filter should now work without case sensitivity :heavy_check_mark:
      * I had to combine the profanity filter and the defacement protection into one method and filter out profanities before filtering out bad intent code :heavy_check_mark:
        * the defacement check still shows the written code as is, just in case someone wants to share a code snippet this will still allow it without running the actual code
      * Now featuring smileys! :heavy_check_mark:
      * The user can now select the number of posts they want to have displayed :heavy_check_mark:
      * I also added error messages when either input field is left empty :heavy_check_mark:
  * :tada: **done with the extras now! :tada:
  * final push of the project at :clock3: 14:45
  

## To Do

This to do list is for my personal use, the full to do list is added at the start of the challenge and as I complete
objectives they will be moved up into the timeline section and ticked off using either emotes such as :heavy_check_mark:
or the `checkbox` syntax [ ] [x] provided by markdown.

### must-haves :heavy_check_mark:
#### :exclamation: Keep your view (html code) seperated from your PHP as much as possible :heavy_check_mark:
#### :exclamation: Separate the footer and header HTML code and `require()` them in your template files to avoid code repetition :heavy_check_mark:
1. Posts must contain at least a Title, Date, Content, Author name :heavy_check_mark:
2. At least 2 classes: PostLoader & Post :heavy_check_mark:
3. Sort messages from new to old (most recent on top) :heavy_check_mark:
4. Handle possible site defacement attacks using `htmlspecialchars()` :heavy_check_mark:
5. Only show the 20 latest posts :heavy_check_mark:

### Nice to have
1. Add a profanity filter (array with "bad" words) :heavy_check_mark:
2. Replace typed smileys with their image counterpart :heavy_check_mark:
3. Allow the user to pick how many messages he wants to see displayed :heavy_check_mark:
