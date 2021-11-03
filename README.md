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

## To Do

This to do list is for my personal use, the full to do list is added at the start of the challenge and as I complete
objectives they will be moved up into the timeline section and ticked off using either emotes such as :heavy_check_mark:
or the `checkbox` syntax [ ] [x] provided by markdown.

### Must haves
#### :exclamation: Keep your view (html code) seperated from your PHP as much as possible
#### :exclamation: Separate the footer and header HTML code and `require()` them in your template files to avoid code repetition
1. Posts must contain at least:
   * Title
   * Date
   * Content
   * Author name
2. At least 2 classes: PostLoader & Post
3. Sort messages from new to old (most recent on top)
4. Handle possible site defacement attacks using `htmlspecialchars()`
5. Only show the 20 latest posts

### Nice to have
1. Add a profanity filter (array with "bad" words)
2. Replace typed smileys with their image counterpart
3. Allow the user to pick how many messages he wants to see displayed
