<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\News;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(\Swift_Mailer, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $NewsLetters = new News();

        $formBuilder = $this->createFormBuilder($NewsLetters);
        $formBuilder
            ->add('email', EmailType::class)
            ->add('nom', TextType::class, array(
                'required' => false,
            ))
            ->add('newsWebsite', CheckboxType::class)
            ->add('newsStylo', CheckboxType::class, array(
                'required' => false,
            ))
            ->add('newsCrayon', CheckboxType::class, array(
        'required' => false,
            ))
            ->add('newsFeutre', CheckboxType::class, array(
        'required' => false,
            ))
            ->add('valider', SubmitType::class);

        $form = $formBuilder->getForm();
        $form->handleRequest($request);

        if($form->isValid() && $form->isSubmitted()) {
            $NewsLetters = $form->getData();

            if(!$NewsLetters->getNom()) {
                $NewsLetters->setNom("Anonyme");
            }

            $message = (new \Swift_Message('Confirmation d\'inscription à la newsletter'))
                ->setFrom('ez@zezezezeeze.fr')
                ->setTo('kurokncjb@gmail.com')
                ->setBody(
                    $this->renderView('emails/confirmationEmalil.html.twig'), 'text/html'
                );
            $this->get('mailer')->send($message);


            $em->persist($NewsLetters);
            $em->flush();

        }


//        $em->persist($NewsLetters);
//        $em->flush();


        return $this->render('default/index.html.twig', array(
        'form' => $form->createView()
    ));
    }
}
