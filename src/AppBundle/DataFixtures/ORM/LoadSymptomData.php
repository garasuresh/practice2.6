<?php
namespace Project\CommonBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Symptom;
class LoadSymptomData extends AbstractFixture implements OrderedFixtureInterface
{
    private $data = <<< EOD
Asthma,Coughing
Asthma,Shortness of breath
Diabetes,Tiredness
Diabetes,weight loss
EOD;

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager){
        $data = $this->getData();
        foreach($data as $value){
            $value = explode(',', $value);
            $condition = $manager->getRepository('AppBundle:Conditions')->findOneByName($value[0]);
            $symptom = new Symptom();
            $symptom->setName($value[1]);
            $symptom->setCondition($condition);
            $manager->persist($symptom);
            $manager->flush();
        }
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder(){
        return 2;
    }

    /**
     * @return array|string
     */
    function getData(){
        $data = trim($this->data);
        $data = explode("\n", $data);
        return $data;
    }
}