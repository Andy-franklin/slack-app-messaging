## Messages

### Usage

Create a message

Create attachments

Add Actions to Attachments

Add Attachment to message

Encode and send message using delayed response or web api end point

### Random

When creating a message, to have a new line the message text must be wrapped in " rather than '. Slack documentation doesn't say that this is required but it is.


## Dialogs https://api.slack.com/dialogs

Dialogs allow the user to interact with your application using pop up dialogs.
These dialogs can contain text fields, textareas and select options.

When sending a dialog to a user you *must* include the `trigger_id`.
The `trigger_id` can be obtained through a slash command, a button or a menu.

### Basic usage

Create a new Dialog.

Add new Elements to the Dialog

Add the Dialog to the DialogResponse

Send the DialogResponse

### Useful resources.

1. https://api.slack.com/dialogs
2. https://github.com/slackapi/python-dialog-example

## Trouble shooting
You will get a 200 OK with the contents of the response body containing the JSON error
`$response->getBody()->getContents()` to view.