<?php

namespace App\Controller;

use App\Entity\LoginUser;
use App\Form\LoginUserType;
use App\Repository\LoginUserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/login/user")
 */
class LoginUserController extends AbstractController
{
    /**
     * @Route("/", name="login_user_index", methods={"GET"})
     */
    public function index(LoginUserRepository $loginUserRepository): Response
    {
        return $this->render('login_user/index.html.twig', [
            'login_users' => $loginUserRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="login_user_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $loginUser = new LoginUser();
        $form = $this->createForm(LoginUserType::class, $loginUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($loginUser);
            $entityManager->flush();

            return $this->redirectToRoute('login_user_index');
        }

        return $this->render('login_user/new.html.twig', [
            'login_user' => $loginUser,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="login_user_show", methods={"GET"})
     */
    public function show(LoginUser $loginUser): Response
    {
        return $this->render('login_user/show.html.twig', [
            'login_user' => $loginUser,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="login_user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, LoginUser $loginUser): Response
    {
        $form = $this->createForm(LoginUserType::class, $loginUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('login_user_index');
        }

        return $this->render('login_user/edit.html.twig', [
            'login_user' => $loginUser,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="login_user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, LoginUser $loginUser): Response
    {
        if ($this->isCsrfTokenValid('delete'.$loginUser->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($loginUser);
            $entityManager->flush();
        }

        return $this->redirectToRoute('login_user_index');
    }
}
