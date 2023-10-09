<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceType;
use App\Repository\ServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/service')]
class ServiceController extends AbstractController
{
    #[Route('/', name: 'app_service_index', methods: ['GET'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function index(ServiceRepository $serviceRepository): Response
    {
        return $this->render('service/index.html.twig', [
            'services' => $serviceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_service_new', methods: ['GET', 'POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($service);
            $entityManager->flush();

            return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('service/new_service.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{id_service}', name: 'app_service_show', methods: ['GET'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function show(Service $service): Response
    {
        return $this->render('service/show_service.html.twig', [
            'service' => $service,
        ]);
    }

    #[Route('/{id_service}/edit', name: 'app_service_edit', methods: ['GET', 'POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function edit(Request $request, Service $service, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('service/edit_service.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{id_service}', name: 'app_service_delete', methods: ['POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function delete(Request $request, Service $service, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$service->getId(), $request->request->get('_token'))) {
            $entityManager->remove($service);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
    }
}
