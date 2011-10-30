## NinerHub

Hopefully this will work like a real broken webapp.

## Directory Structure:

    /htdocs   # Webapp directory
    /conf     # Configuration for apache, etc. (ignored by git)

## Installation

    * Setting up PHP and a webserver is beyond the scope of
      this document.  However, [Bitnami] makes a pretty easy-to-use
      [MAMP stack].
    * Run the DDL scripts in sequence by number.  00 is optional
      as it's the one that creates the database and sets up the
      permissions.  Edit the two variable definitions at the
      beginning as appropriate.  Make sure that your
      `/htdocs/inc/config.php` has the same information as in your
      script.
    * For security purposes, it's important that you change the global
      salt in `/htdocs/inc/config.php` as this will prevent folks
      from being able to brute-force passwords if the database is
      compromised without the application directory.  (If you lose
      both, it's all over).


[Bitnami]: http://bitnami.org (Bitnami)
[MAMP stack]: http://bitnami.org/stack/mampstack (MAMP Stack)
