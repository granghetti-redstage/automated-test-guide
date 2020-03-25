# Automated Tests Guide

## Unit Test
- All unit tests goes in the **Test/Unit** folder inside a module.
- It's a good standard to follow the same folder structure of the class you will test.
- All test cases extends from the class **PHPUnit\Framework\TestCase**
- The test case initial setup can be made in the protected **setUp** method.
- Magento unit tests documentation can be found [here](https://devdocs.magento.com/guides/v2.3/test/unit/unit_test_execution.html)

## Acceptance Test
- All acceptance tests goes in the **Test/Mftf** folder inside a module.
- The file structure is:
    - **ActionGroup**: Building blocks for quickly creating tests and allowing them to be extended.
    - **Data**: Entities provided for use and as templates for entity creation and manipulation.
    - **Page**: Testing areas which will be tested.
    - **Section**: Reusable part of a **page** and is the standard file for defining UI elements on a page used in a test.
    - **Test**: Where the main test files are located.
- The main file can have a `<before>` and `<after>` tags which are executed before and after the main test code respectively.
- Magento mftf documentation can be found [here](https://devdocs.magento.com/mftf/docs/introduction.html)