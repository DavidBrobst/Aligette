<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Distribution;
use AppBundle\Entity\OpenHours;

use AppBundle\Entity\Retail;
use AppBundle\Form\RetailType;

use AppBundle\Entity\Labels;
use AppBundle\Form\LabelsType;

use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
		$regions = $em->getRepository('AppBundle:FrenchGeo')->getFrenchRegions();
		
		// replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
			'regions' => $regions
        ]);
    }
	
	/**
     * @Route("/retailers/{region}/", name="viewRetailers")
     */
    public function viewAction($region = 'all')
    {
        
		$em = $this->getDoctrine()->getManager();
		$retailers = $em->getRepository('AppBundle:Distribution')->getRetailersViaDistribution($region);
		
        return $this->render('Retail/viewRetailers.html.twig', [
            'retailers' => $retailers,
        ]);
    }
	
	
	/**
     * @Route("/viewRetailer/{retailerId}", requirements={"retailerId":"\d+"},name="viewRetailer")
     */
    public function viewRetailerAction(Retail $retailerId)
    {		
		
        return $this->render('Retail/viewRetailer.html.twig', [
            'retailer' => $retailerId,
        ]);
    }

	/**
     * @Route("/addRetailer", name="addRetailer")
     */
    public function addRetailerAction(Request $request)
    {		
		
		$retailer = new Retail();
		$distribution = new Distribution();
		$retailer->addDistribution($distribution);
		$form = $this->createForm(RetailType::class, $retailer, array(	'action' => $this->generateUrl('addRetailer'),
																		'method' => 'POST',
		));
		
		$form->handleRequest($request);
		
        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$retailer->getDistributions();
			foreach ($retailer->getDistributions() as $distrib){
				$distrib -> setRetail($retailer);
			}
			$em->persist($retailer);
			$em->flush();

			return $this->redirectToRoute('viewRetailer', ['retailerId'=>$retailer->getId(),]);
		}
		
		return $this->render('Retail/addRetailer.html.twig', [
            'form' => $form->createView(),
        ]);
    }
	
	
	/**
     * @Route("/viewLabel/{labelId}", requirements={"labelId":"\d+"},name="viewLabel")
     */
    public function viewLabelAction(Labels $labelId)
    {		
		
        return $this->render('Label/viewLabel.html.twig', [
            'label' => $labelId,
        ]);
    }

	/**
     * @Route("/addLabel", name="addLabel")
     */
    public function addLabelAction(Request $request)
    {		
		
		$label = new Labels();
		
		$form = $this->createForm(LabelsType::class, $label, array(	'action' => $this->generateUrl('addLabel'),
																		'method' => 'POST',
		));
		
		$form->handleRequest($request);
		
        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($label);
			$em->flush();

			return $this->redirectToRoute('viewLabel', ['labelId'=>$label->getId(),]);
		}
		
		return $this->render('Label/addLabel.html.twig', [
            'form' => $form->createView(),
        ]);
    }

	
}
