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
        $contact = new contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($form->getData());
            $entityManager->flush();
            $contact = $form->getData();

            return $this->redirectToRoute('contact');
        }
        return $this->renderForm('contact/index.html.twig', [
            'city' => $city,
            'name' => $name,
            'contact' => $this->contactRepository->findAll(),
            'form' => $form,
        ]);
    }
    /**
     * @Route("/index2/{id}", name="random")
     */
    public function index2(Request $request, string $id = ""): Response
    {
        $id = $request->get('id');
        return $this->render('contact/index2.html.twig', [
            'contact' => $this->contactRepository->find($id),
        ]);
    }
}
