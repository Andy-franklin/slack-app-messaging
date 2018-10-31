# Slack App Messaging

This package provides the basic building blocks of slack responses for use with the Slack API.

### Building an interactive message
https://api.slack.com/interactive-messages

```php
    public function sendLoginOrRegisterMessageResponse($responseUrl)
    {
        $message = new Message();
        $attachment = new Attachment();
        $loginAction = new Action();
        $registerAction = new Action();
        
        $loginAction
            ->setName('login')
            ->setText('Login to your Account')
            ->setType('button')
            ->setValue('login');
            
        $registerAction
            ->setName('register')
            ->setText('Register an Account')
            ->setType('button')
            ->setValue('register');
            
        $attachment
            ->setTitle('Your Slack account needs to be linked with your account to continue.')
            ->addAction($loginAction)
            ->addAction($registerAction)
            ->setCallbackId('loginRegister');
            
        $message->addAttachment($attachment);
        
        //POST this message as JSON to the responseUrl from the original Slack request
        $client = new Client();
        $response = $client->post($responseUrl, [
            'body' => $this->serializer->serialize($message, 'json')
        ]);
        return $response;
    }
```

An endpoint for the actions will need to be set up and the appropriate actions taken depending on the callbackId.

### Opening a Dialog
https://api.slack.com/dialogs

```php
    public function sendLoginDialog($triggerId)
    {
        //Build the dialog with a single username field.
        $textElement = new TextElement();
        $textElement
            ->setName('username')
            ->setLabel('Username')
            ->setPlaceholder('Enter your username')
            ->setHint('The username you have registered');
        $dialog = new Dialog();
        $dialog
            ->setTitle('Login')
            ->setCallbackId('submit-login')
            ->setSubmitLabel('Submit')
            ->addElement($textElement);
        
        //Add the triggerId from the initial Slack request
        $dialogResponse = new DialogResponse();
        $dialogResponse
            ->setTriggerId($triggerId)
            ->setDialog($dialog);
        
        //Generate a \GuzzleHttp\Psr7\Request
        $request = $dialogResponse->getPostRequest('dialog.open', $this->serializer, $this->slackXoxpToken);
        
        //Send this request
        $client = new Client();
        $response = $client->send($request);
    }
```
