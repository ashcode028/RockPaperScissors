# Onlinegame-RockPaperScissors
## Specifications of each file
### Entry page-[index.php](RockPaperS/index.php)
When you first come to the application (index.php) you are told to go to a login screen.

### Login page-[login.php](RockPaperS/login.php)

The login screen has error checking on its input data. If either the name or the 
password field is blank, a message of this form shows up:
```
User name and password are required
```
If the password is non-blank and incorrect, message comes in the form of:
```
Incorrect password
```
If there are errors, it comes back to the login screen (login.php) and shows the error 
with blank input fields (i.e. doesn't carry over the values for name="who" and name="pass" fields 
from the previous post).

I used a "salted hash" for the password. The "plaintext" of the password is not 
present in the application source code except in comments.
The stored_hash is the MD5 of the salt concatenated with the plaintext of password(here-check123).
This is computed using the following PHP:
```
$md5 = hash('md5', 'XyZzy12*_check123');
$salt_used = 'XyZzy12*_';
```
In order to check an incoming password I concatenated the salt plus password together and 
then run that through the hash() function and compared it to the stored_hash.

If the incoming password, properly hashed matches the stored stored_hash value, the user's browser
is redirected to the game.php page with the user's name as a GET parameter using:
```
header("Location: game.php?name=".urlencode($_POST['who']));
```
### Gaming Area-[game.php](RockPaperS/game.php)
