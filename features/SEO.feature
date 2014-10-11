Feature: SiteMap.xml and Robot.txt SEO tests

  As a SEO tester
  In order to make sure that correct information and access is provided to search engine robots
  I should be able to access the sitemap and the Robot.txt pages and view the contents


  Scenario Outline: All search engine robots can read files in my domain

    Then Search Engine Robots can access the file with url <url>
    Then File content <filetext> should be shown in the screen

  Examples:
    | url                                  | filetext                                      |
    | "http://www.sparwelt.de/sitemap.xml" | "http://www.sitemaps.org/schemas/sitemap/0.9" |
    | "http://www.sparwelt.de/robots.txt"  | "User-agent: *"                               |


  @new
  Scenario Outline: Google robot should be able to find my sitemap.xml in webpages across my site

    Given Google Robot is in Home Page
    When I opens sitemap.xml from "<Page>"
    Then I should receive "<Response_Code>" response
    And I should see text as "<Text>"


  Examples:

    | Page      | Response_Code | Text                                        |
    | Home Page | 200          | http://www.sparwelt.de/sitemap/sitemap-statics.xml |



