<?php

namespace Apsl\Inf03\Webdev\Pages;

use Apsl\Controller\Page;
use Apsl\Http\Response;
use Apsl\Http\Request;
use PandaValidator;

class HomePage extends Page
{
    public function createResponse(): void
    {
        $this->response->addHeader(Response::HEADER_CONTENT_TYPE, 'text/html');
        $this->response->useTemplate('templates/index.html.php', [
            'title' => 'Hello!'
        ]);
        $templateParams = [
            'title' => 'Form',
            'success' => $this->request->getGetValue('success', false)
        ];

        $errors = [];
        if ($this->request->isMethod(Request::METHOD_POST)) {
            $data = $this->request->getValue('form', []);
            $text = trim($data['text'] ?? '');
            $grade = trim($data['grade'] ?? '');


            $validator = new PandaValidator();
            $textError = $validator->validateText($_POST["text"]);
            if ($textError != "") {
                $errors['text'] = $textError;
            }
            $gradeError = $validator->validateGrade($_POST["grade"]);
            if ($gradeError != "") {
                $errors['grade'] = $gradeError;
            }
            if (empty($errors)) {

                $this->response->redirect($this->request->getUri().'?success=1');

                return;
            }
        }

        $templateParams['data'] = $data;
        $templateParams['errors'] = $errors;
        $this->response->useTemplate('templates/index.html.php', $templateParams);
    }
}