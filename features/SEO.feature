Feature: SiteMap.xml and Robot.txt SEO tests

  As a SEO tester
  In order to make sure that correct information and access is provided to search engine robots
  I should be able to access the sitemap and the Robot.txt pages and view the contents

  @new
  Scenario Outline: All search engine robots can read files in my domain

    Then Search Engine Robots can access the file with url <url>
    Then File content <filetext> should be shown in the screen

  Examples:
    |url                                  | filetext                                      |
    |"http://www.sparwelt.de/sitemap.xml" | "http://www.sitemaps.org/schemas/sitemap/0.9" |
    |"http://www.sparwelt.de/robots.txt"  | "User-agent: *"                               |



