<?php

namespace Bordeux\SchemaOrg\Thing\MedicalEntity;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/MedicalProcedure
 *
 *
 * -------------------------------- Followup ---------------------------------------------
 *
 * @property string|string[] followup
 *
 * @method string|string[] getFollowup() Typical or recommended followup care after the procedure is performed.
 *
 * @method MedicalProcedure setFollowup(string $followup ) setFollowup(string[] $followup )Typical or recommended followup care after the procedure is performed.
 *
 *
 * -------------------------------- HowPerformed ---------------------------------------------
 *
 * @property string|string[] howPerformed
 *
 * @method string|string[] getHowPerformed() How the procedure is performed.
 *
 * @method MedicalProcedure setHowPerformed(string $howPerformed ) setHowPerformed(string[] $howPerformed )How the procedure is performed.
 *
 *
 * -------------------------------- Preparation ---------------------------------------------
 *
 * @property string|string[] preparation
 *
 * @method string|string[] getPreparation() Typical preparation that a patient must undergo before having the procedure performed.
 *
 * @method MedicalProcedure setPreparation(string $preparation ) setPreparation(string[] $preparation )Typical preparation that a patient must undergo before having the procedure performed.
 *
 *
 * -------------------------------- ProcedureType ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalProcedureType|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalProcedureType[] procedureType
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalProcedureType|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalProcedureType[] getProcedureType() The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
 *
 * @method MedicalProcedure setProcedureType(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalProcedureType $procedureType ) setProcedureType(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalProcedureType[] $procedureType )The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
 *
 *
 */
 class MedicalProcedure extends \Bordeux\SchemaOrg\Thing\MedicalEntity {

 }