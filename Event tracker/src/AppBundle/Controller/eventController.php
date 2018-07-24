<?php
namespace AppBundle\Controller;
use AppBundle\Entity\event;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class eventController extends Controller

{

    /**

     * @Route("/", name="bigevents")

     */

    public function listAction(){

        $bigevents = $this->getDoctrine()->getRepository('AppBundle:event')->findAll();

        // replace this example code with whatever you need

        return $this->render('event/index.html.twig', array('bigevents'=>$bigevents));

    }

     /**

     * @Route("/event/create", name="event_create")

     */

    public function createAction(Request $request){

        $event = new event;

        $form = $this->createFormBuilder($event)->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))


        ->add('description', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
    
            ->add('image', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('capacity', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
    
            ->add('email', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('phone_number', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('address', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('EventURL', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('Type', ChoiceType::class, array('choices'=>array('music'=>'music', 'sport'=>'sport', 'movie '=>'movie ','theater'=>'theater'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('startDate', DateTimeType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('endDate', DateTimeType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
    
         ->add('save', SubmitType::class, array('label'=> 'create event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-botton:15px')))

        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            //fetching data

            $name = $form['name']->getData();

            $description = $form['description']->getData();

            $image = $form['image']->getData();

            $capacity = $form['capacity']->getData();

            $email = $form['email']->getData();

            $phone_number = $form['phone_number']->getData();

            $address = $form['address']->getData();

            $EventURL = $form['EventURL']->getData();

            $Type = $form['Type']->getData();

            $startDate = $form['startDate']->getData();

            $endDate = $form['endDate']->getData();

            $now = new\DateTime('now');

            $event->setName($name);

            $event->setDescription($description);

            $event->setImage($image);

            $event->setCapacity($capacity);

            $event->setEmail($email);

            $event->setPhoneNumber($phone_number);

            $event->setAddress($address);

            $event->setEventURL($EventURL);

            $event->setType($Type);

            $event->setStartDate($startDate);

            $event->setEndDate($endDate);

            

            $em = $this->getDoctrine()->getManager();

            $em->persist($event);

            $em->flush();

            $this->addFlash(

                    'notice',

                    'event Added'

                    );

            return $this->redirectToRoute('bigevents');

        }

        // replace this example code with whatever you need

        return $this->render('event/create.html.twig', array('form' => $form->createView()));

    }

     /**

     * @Route("/event/edit/{id}", name="event_edit")

     */

    public function editAction( $id, Request $request){

        $event = $this->getDoctrine()->getRepository('AppBundle:event')->find($id);
    
    $now = new\DateTime('now');
    
                            $event->setName($event->getName());
    
                            $event->setDescription($event->getDescription());
                
                            $event->setImage($event->getImage());
                
                            $event->setCapacity($event->getCapacity());
                
                            $event->setEmail($event->getEmail());

                            $event->setPhoneNumber($event->getPhoneNumber());

                            $event->setAddress($event->getAddress());

                            $event->setEventURL($event->getEventURL());

                            $event->setType($event->getType());

                            $event->setStartDate($event->getStartDate());

                            $event->setEndDate($event->getEndDate());
                
                            
    
            $form = $this->createFormBuilder($event)->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
    
            ->add('description', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
    
            ->add('image', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('capacity', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
    
            ->add('email', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('phone_number', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('address', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('EventURL', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('Type', ChoiceType::class, array('choices'=>array('music'=>'music', 'sport'=>'sport', 'movie '=>'movie ','theater'=>'theater','nature'=>'nature'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('startDate', DateTimeType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

            ->add('endDate', DateTimeType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
    
         ->add('save', SubmitType::class, array('label'=> 'Update event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-botton:15px')))
    
            ->getForm();
    
            $form->handleRequest($request);
    
            if($form->isSubmitted() && $form->isValid()){
    
                //fetching data
    
                $name = $form['name']->getData();
    
                $description = $form['description']->getData();
    
                $image = $form['image']->getData();
    
                $capacity = $form['capacity']->getData();
    
                $email = $form['email']->getData();

                $phone_number = $form['phone_number']->getData();

                $address = $form['address']->getData();

                $EventURL = $form['EventURL']->getData();

                $Type = $form['Type']->getData();

                $startDate = $form['startDate']->getData();

                $endDate = $form['endDate']->getData();
    
                $now = new\DateTime('now');
    
                $em = $this->getDoctrine()->getManager();
    
                $event = $em->getRepository('AppBundle:event')->find($id);
    
                $event->setName($name);
    
                $event->setDescription($description);
    
                $event->setImage($image);
    
                $event->setCapacity($capacity);
    
                $event->setEmail($email);

                $event->setPhoneNumber($phone_number);

                $event->setAddress($address);

                $event->setEventURL($EventURL);

                $event->setType($Type);

                $event->setStartDate($startDate);

                $event->setEndDate($endDate);
    
                
    
             
    
                $em->flush();
    
                $this->addFlash(
    
                        'notice',
    
                        'event Updated'
    
                        );
    
                return $this->redirectToRoute('bigevents');
    
            }
    
            return $this->render('event/edit.html.twig', array('event' => $event, 'form' => $form->createView()));
    
        }

     /**

     * @Route("/event/details/{id}", name="event_details")

     */

            public function detailsAction($id){

                $event = $this->getDoctrine()->getRepository('AppBundle:event')->find($id);

            return $this->render('event/details.html.twig', array('event' => $event));

}

/**

     * @Route("/event/delete/{id}", name="event_delete")

     */

    public function deleteAction($id){

        $em = $this->getDoctrine()->getManager();

   $event = $em->getRepository('AppBundle:event')->find($id);

   $em->remove($event);

    $em->flush();

   $this->addFlash(

           'notice',

           'event Removed'

           );

    return $this->redirectToRoute('bigevents');

}

}