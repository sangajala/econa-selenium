@seo
Feature: SiteMap.xml and Robot.txt SEO tests

  As a SEO tester
  In order to make sure that correct information and access is provided to search engine robots
  I should be able to access the sitemap and the Robot.txt pages and view the contents

  Scenario Outline: Google crawler should be able to find my sitemap.xml in webpages across my site

    Given Google Robot is in Home Page
    When I opens "sitemap.xml" from "<Page>"
    Then I should receive "<Response_Code>" response
    And I should see text as "<Text>"


  Examples:

    | Page      | Response_Code | Text                                        |
    | Home Page | 200          | http://www.sparwelt.de/sitemap/sitemap-statics.xml |


    @new
    Scenario: Google crawler should be able to find robot.text with contents

      Given Google Robot is in Home Page
      Then I should see the element as "content= index,follow"
      When I opens "robots.txt" from "Home Page"
      Then I should see the below text
      |Text|
      |User-agent: * |
      |Disallow: /lp/|
      |Disallow: /ajax/|
      |Disallow: /generated/|
      |Disallow: /suche?    |
      |Disallow: /dev.php/  |
      |Disallow: /kommentare/|
      |Disallow: /kommentar/ |
      |Disallow: /frontend/  |
      |Disallow: /_fragment? |
      |Disallow: /load-balancer-test|








