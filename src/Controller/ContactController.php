<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    private $contactRepository;
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @Route("/contactez-moi/{city}", name="contact")
     */
    public function index(Request $request, string $city = ""): Response
    {
        $name = $request->query->get('name');
        $form = $this->FormContactBase($request);

        return $this->renderForm('contact/index.html.twig', [
            'city' => $city,
            'name' => $name,
            'contact' => $this->contactRepository->findAll(),
            'form' => $form,
        ]);
    }
    private function FormContactBase(Request $request){
        $contact = new Contact();
        $form = $this->createForm( ContactType::class, $contact );

        return $form;
    }
}