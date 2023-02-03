<?php

namespace Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/Vein
 *
 *
 * -------------------------------- DrainsTo ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel[] drainsTo
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel[] getDrainsTo() The vasculature that the vein drains into.
 *
 * @method Vein setDrainsTo(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel $drainsTo ) setDrainsTo(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel[] $drainsTo )The vasculature that the vein drains into.
 *
 *
 * -------------------------------- RegionDrained ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem[]|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] regionDrained
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem[]|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] getRegionDrained() The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
 *
 * @method Vein setRegionDrained(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem $regionDrained ) setRegionDrained(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem[] $regionDrained ) setRegionDrained(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure $regionDrained ) setRegionDrained(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] $regionDrained )The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
 *
 *
 * -------------------------------- Tributary ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] tributary
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] getTributary() The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
 *
 * @method Vein setTributary(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure $tributary ) setTributary(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] $tributary )The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
 *
 *
 */
 class Vein extends \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel {

 }