# PS-User-Login-Reset-Counter

A handy script to help reset the login count counter for PS User Login Count plugin

Plugin: https://wordpress.org/support/plugin/ps-user-login-count/

Instructions:

1. Install WPCode snippets library
2. Paste in the code block from this repo into a PHP code type
3. Change the user ID (currently 100) to the user ID that you want the login count to reset for (positive int only!)
4. Change the login count (200) to whatever you want 
5. Save snippet
6. Turn snippet on
7. Save again (this is what actually runs the snippet)
7. Check user login count in WP admin
8. Turn snippet off
9. Save snippet
10. If you need to run this again in future, change any instances of “01” below to an incrementing number

See https://wordpress.org/support/topic/reset-the-counters-with-solution/
