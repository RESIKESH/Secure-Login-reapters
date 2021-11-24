This is the submission for Secure Login of Track Secure Coding.
Submission by: Resikesh

Language used - php, html

Assumptions taken into account before making the login functionality - 
1. The register functionality already exists and is in place.
2. This module will act a secure login functionality.
3. In order to make users, one account was added manually to the database.
4. Only login functionality is required no other function is to be made.

Steps to Setup - 
1. fill in the contents of the of connection.php
2. migrate the database present in secure_login.sql
3. Move all the files into /var/www/html/ (in *nix like systems) or in c://xampp/htddocs (XAMPP in windows)
4. goto http://localhost/
5. Default credentials - admin:admim
6. protected.php is a restricted resource, only authenticated users can see that resource. 

Notes: 
1. Since it's not a full fledged applcaition, passwords are only salted and hashed, the salt in this condition is a static value. 