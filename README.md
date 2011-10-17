## NinerHub

Rather than a real working web application with vulnerabilities, this is more
of a collection of broken sites with an index guiding you to each area.

## Directory Structure:

    /ninerhub   # Webapp directory
      /pom.xml  # Maven POM file with dependencies

## Running NinerHub

    $ cd ninerhub
    $ mvn org.mortbay.jetty:jetty-maven-plugin:run

The first time you run this, it's likely to take awhile if you don't
have all the Maven dependencies as they'll be cached locally.

Once you see something like:
    
    [INFO] Started Jetty Server

Visit http://localhost:8080/
