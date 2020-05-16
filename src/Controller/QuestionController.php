<?php

namespace App\Controller;

use App\Service\MarkdownHelper;
use Sentry\State\HubInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show($slug, MarkdownHelper $markdownHelper, HubInterface $sentryHub)
    {

        throw new \Exception('bad stuff happened!');

        $answers = [
            'answer 1',
            'answer 2',
            'answer 3',
        ];
        $questionText = 'I\'ve been turned into a cat, any thoughts on how to turn back? While I\'m ***adorable***, I don\'t really care for cat food.';

        $parsedQuestionText = $markdownHelper->parse($questionText);

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
            'questionText' => $parsedQuestionText   ,
        ]);
    }

}