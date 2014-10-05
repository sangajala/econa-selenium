Feature: Search
  In order to see a word definition
  As a website user
  I need to be able to search for a word

#  Scenario: Searching for a page that does exist
#    Given I am on "/wiki/Main_Page"
#    When I fill in "search" with "Behavior Driven Development"
#    And I press "searchButton"
#    Then I should see "software development process"
#
#  Scenario: Searching for a page that does NOT exist
#    Given I am on "/wiki/Main_Page"
#    When I fill in "search" with "Glory Driven Development"
#    And I press "searchButton"
#    Then I should see "Search results"
#
#  @javascript
#  Scenario: Searching for a page with autocompletion
#    Given I am on "/wiki/Main_Page"
#    When I fill in "search" with "Behavior Driv"
#    And I wait for the suggestion box to appear
#    Then I should see "Behavior-Driven Development"


  @22@23@ram@new
  Scenario Outline: User selects the voucher and opens the title from image

    Given user selected a random vendor with name 'Amazon' from 'Gutscheine' menu
    When selects the '<User_selected_option>' of voucher with title '20%-Gutschein für Sport- und Outdoor-Bekleidung bei Amazon'
    Then new page is opened
    And voucher popup is shown with the title '20%-Gutschein für Sport- und Outdoor-Bekleidung bei Amazon'
    And the voucher code is shown with text 'winter20'
    When user copies the voucher code by clicking sissior icon
    Then the voucher code should be saved in clipboard

  Examples:

    |User_selected_option|
    |Title               |
    |Image               |
    |voucher button     |

  @26@27
  Scenario Outline: User a valid user perform news letter enrollment

    Given user is in homepage
    When enters for newsletter enrollment with email as '<email>'
    Then message should display with text '<message>'

  Examples:
    |email|message|
    |     |Please fill out this field.|
    |test |Please include and '@' in the email address. 'test' is missing an '@'
    |test@||
    |test@2||
    |test@test.com|Success|
