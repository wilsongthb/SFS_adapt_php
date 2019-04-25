<?php

class BoletaElectronica {
  private $ublVersionIdSwf = "";
  private $CustomizationIdSwf = "";
  private $idResumen = "";
  private $fechaEmision = "";
  private $fechaResumen = "";
  private $nroRucEmisorSwf = "";
  private $identificadorFacturadorSwf = "";
  private $nombreComercialSwf = "";
  private $razonSocialSwf = "";
  private $identificadorFirmaSwf = "";
  private $tipDocuEmisorSwf = "";


  public function getUblVersionIdSwf(){ return $this->ublVersionIdSwf; }
  public function setUblVersionIdSwf($val) { $this->ublVersionIdSwf = $val; }

  public function getCustomizationIdSwf(){ return $this->CustomizationIdSwf; }
  public function setCustomizationIdSwf($val) { $this->CustomizationIdSwf = $val; }

  public function getIdResumen(){ return $this->idResumen; }
  public function setIdResumen($val) { $this->idResumen = $val; }

  public function getFechaEmision(){ return $this->fechaEmision; }
  public function setFechaEmision($val) { $this->fechaEmision = $val; }

  public function getFechaResumen(){ return $this->fechaResumen; }
  public function setFechaResumen($val) { $this->fechaResumen = $val; }

  public function getNroRucEmisorSwf(){ return $this->nroRucEmisorSwf; }
  public function setNroRucEmisorSwf($val) { $this->nroRucEmisorSwf = $val; }

  public function getIdentificadorFacturadorSwf(){ return $this->identificadorFacturadorSwf; }
  public function setIdentificadorFacturadorSwf($val) { $this->identificadorFacturadorSwf = $val; }

  public function getNombreComercialSwf(){ return $this->nombreComercialSwf; }
  public function setNombreComercialSwf($val) { $this->nombreComercialSwf = $val; }

  public function getRazonSocialSwf(){ return $this->razonSocialSwf; }
  public function setRazonSocialSwf($val) { $this->razonSocialSwf = $val; }

  public function getIdentificadorFirmaSwf(){ return $this->identificadorFirmaSwf; }
  public function setIdentificadorFirmaSwf($val) { $this->identificadorFirmaSwf = $val; }

  public function getTipDocuEmisorSwf(){ return $this->tipDocuEmisorSwf; }
  public function setTipDocuEmisorSwf($val) { $this->tipDocuEmisorSwf = $val; }


  public function getXML() {
    $ublVersionIdSwf = $this->ublVersionIdSwf;
    $CustomizationIdSwf = $this->CustomizationIdSwf;
    $idResumen = $this->idResumen;
    $fechaEmision = $this->fechaEmision;
    $fechaResumen = $this->fechaResumen;
    $nroRucEmisorSwf = $this->nroRucEmisorSwf;
    $identificadorFacturadorSwf = $this->identificadorFacturadorSwf;
    $nombreComercialSwf = $this->nombreComercialSwf;
    $razonSocialSwf = $this->razonSocialSwf;
    $identificadorFirmaSwf = $this->identificadorFirmaSwf;
    $tipDocuEmisorSwf = $this->tipDocuEmisorSwf;

    $val = <<<EOD
<?xml version="1.0" encoding="windows-1250"?>
<SummaryDocuments xmlns="urn:sunat:names:specification:ubl:peru:schema:xsd:SummaryDocuments-1" 
                xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2" 
                xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2" 
                xmlns:ext="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2" 
                xmlns:sac="urn:sunat:names:specification:ubl:peru:schema:xsd:SunatAggregateComponents-1" 
                xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
                xsi:schemaLocation="urn:sunat:names:specification:ubl:peru:schema:xsd:SummaryDocuments-1 UBLPE-SummaryDocuments-1.0.xsd">                 
<ext:UBLExtensions>
</ext:UBLExtensions>        
 <cbc:UBLVersionID>$ublVersionIdSwf</cbc:UBLVersionID>
 <cbc:CustomizationID>$CustomizationIdSwf</cbc:CustomizationID>
 <cbc:ID>$idResumen</cbc:ID>
 <cbc:ReferenceDate>$fechaEmision</cbc:ReferenceDate>
 <cbc:IssueDate>$fechaResumen</cbc:IssueDate>
 <cac:Signature>
    <cbc:ID>$nroRucEmisorSwf</cbc:ID>
    <cbc:Note>$identificadorFacturadorSwf</cbc:Note>
    <cac:SignatoryParty>
        <cac:PartyIdentification>
          <cbc:ID>$nroRucEmisorSwf</cbc:ID>
        </cac:PartyIdentification>
        <cac:PartyName>
          <cbc:Name>$nombreComercialSwf</cbc:Name>
        </cac:PartyName>
        <cac:AgentParty>
          <cac:PartyIdentification>
            <cbc:ID>$nroRucEmisorSwf</cbc:ID>
          </cac:PartyIdentification>
          <cac:PartyName>
            <cbc:Name>$razonSocialSwf</cbc:Name>
          </cac:PartyName>
          <cac:PartyLegalEntity>
            <cbc:RegistrationName>$razonSocialSwf</cbc:RegistrationName>
          </cac:PartyLegalEntity>
        </cac:AgentParty>
      </cac:SignatoryParty>
      <cac:DigitalSignatureAttachment>
        <cac:ExternalReference>
          <cbc:URI>$identificadorFirmaSwf</cbc:URI>
        </cac:ExternalReference>
      </cac:DigitalSignatureAttachment>
 </cac:Signature>  
 <cac:AccountingSupplierParty>
  <cbc:CustomerAssignedAccountID>$nroRucEmisorSwf</cbc:CustomerAssignedAccountID>
  <cbc:AdditionalAccountID>$tipDocuEmisorSwf</cbc:AdditionalAccountID>
  <cac:Party>
    <cac:PartyLegalEntity>
      <cbc:RegistrationName>$razonSocialSwf</cbc:RegistrationName>
    </cac:PartyLegalEntity>
  </cac:Party>
  </cac:AccountingSupplierParty>
EOD;
  
    foreach ($this->listaResumen as $key => $value) {
      $linea = $value['linea'];
      $tipDocResumen = $value['tipDocResumen'];
      $idDocResumen = $value['idDocResumen'];
      $numDocUsuario = $value['numDocUsuario'];
      $tipDocUsuario = $value['tipDocUsuario'];
      $serDocModifico = $value['serDocModifico'];
      $numDocModifico = $value['numDocModifico'];
      $tipDocModifico = $value['tipDocModifico'];
      $tipRegPercepcion = $value['tipRegPercepcion'];
      $porPercepcion = $value['porPercepcion'];
      $monBasePercepcion = $value['monBasePercepcion'];
      $monTotIncPercepcion = $value['monTotIncPercepcion'];
      $monPercepcion = $value['monPercepcion'];
      $tipEstado = $value['tipEstado'];
      $moneda = $value['moneda'];
      $totImpCpe = $value['totImpCpe'];
      $totValGrabado = $value['totValGrabado'];
      $totValExoneado = $value['totValExoneado'];
      $totValInafecto = $value['totValInafecto'];
      $monValGratuito = $value['monValGratuito'];
      $totOtroCargo = $value['totOtroCargo'];
      $monTribIsc = $value['monTribIsc'];
      $monTribIsc = $value['monTribIsc'];
      $monTribIgv = $value['monTribIgv'];
      $monTribIgv = $value['monTribIgv'];
      $monTribOtro = $value['monTribOtro'];
      $monTribOtro = $value['monTribOtro'];

      $val .= <<<EOD
      <sac:SummaryDocumentsLine>
        <cbc:LineID>$linea</cbc:LineID>
        <cbc:DocumentTypeCode>$tipDocResumen</cbc:DocumentTypeCode>
        <cbc:ID>$idDocResumen</cbc:ID>
        <cac:AccountingCustomerParty>
          <cbc:CustomerAssignedAccountID>$numDocUsuario</cbc:CustomerAssignedAccountID>
          <cbc:AdditionalAccountID>$tipDocUsuario</cbc:AdditionalAccountID>
        </cac:AccountingCustomerParty>
        <!--  Documento que modifica -->
      <#if resumen.serDocModifico != "">
        <cac:BillingReference>
          <cac:InvoiceDocumentReference>
            <cbc:ID>$serDocModifico-$numDocModifico</cbc:ID>
            <cbc:DocumentTypeCode>$tipDocModifico</cbc:DocumentTypeCode>
          </cac:InvoiceDocumentReference>
        </cac:BillingReference>
      </#if>
      
        <!--  Datos de Percepcion - PER -->
      <#if resumen.tipRegPercepcion != "">
        <sac:SUNATPerceptionSummaryDocumentReference>
          <sac:SUNATPerceptionSystemCode>$tipRegPercepcion</sac:SUNATPerceptionSystemCode>
          <sac:SUNATPerceptionPercent>$porPercepcion</sac:SUNATPerceptionPercent>
          <cbc:TotalInvoiceAmount currencyID="PEN">$monBasePercepcion</cbc:TotalInvoiceAmount>
          <sac:SUNATTotalCashed currencyID="PEN">$monTotIncPercepcion</sac:SUNATTotalCashed>
          <cbc:TaxableAmount currencyID="PEN">$monPercepcion</cbc:TaxableAmount>
        </sac:SUNATPerceptionSummaryDocumentReference>	
      </#if>
      <!-- PER -->
      
        <cac:Status>
          <cbc:ConditionCode>$tipEstado</cbc:ConditionCode>
        </cac:Status>
        <!--Total Importe Total-->
        <sac:TotalAmount currencyID="$moneda">$totImpCpe</sac:TotalAmount>
      
        <!--Total Venta Operaciones Gravadas - 01 -->
      <#if resumen.totValGrabado != ''>
      <#if resumen.totValGrabado?number gt 0>
        <sac:BillingPayment>
          <cbc:PaidAmount currencyID="$moneda">$totValGrabado</cbc:PaidAmount>
          <cbc:InstructionID>01</cbc:InstructionID>
        </sac:BillingPayment>
      </#if>	
      </#if>
      <!-- fin 01 -->
      
        <!--Total Venta Operaciones Exoneradas - 02 -->
      <#if resumen.totValExoneado != ''>
      <#if resumen.totValExoneado?number gt 0>
        <sac:BillingPayment>
          <cbc:PaidAmount currencyID="$moneda">$totValExoneado</cbc:PaidAmount>
          <cbc:InstructionID>02</cbc:InstructionID>
        </sac:BillingPayment>
      </#if>	
      </#if>
      <!-- fin 02 -->
        
        <!--Total Venta Operaciones Inafectas - 03 -->
      <#if resumen.totValInafecto != ''>
      <#if resumen.totValInafecto?number gt 0>
        <sac:BillingPayment>
          <cbc:PaidAmount currencyID="$moneda">$totValInafecto</cbc:PaidAmount>
          <cbc:InstructionID>03</cbc:InstructionID>
        </sac:BillingPayment>
      </#if>	
      </#if>	
      <!-- fin 03 -->
      
        <!--Total Venta Operaciones Gratuitas - 05 -->
      <#if resumen.monValGratuito != ''>
      <#if resumen.monValGratuito?number gt 0>
        <sac:BillingPayment>
          <cbc:PaidAmount currencyID="$moneda">$monValGratuito</cbc:PaidAmount>
          <cbc:InstructionID>05</cbc:InstructionID>
        </sac:BillingPayment>
      </#if>	
      </#if>	
      <!-- fin 05 -->
      
        <!--Total SUMATORIO OTROS CARGOS - Cargos-->
      <#if resumen.totOtroCargo != ''>
      <#if resumen.totOtroCargo?number gt 0>
        <cac:AllowanceCharge>
          <cbc:ChargeIndicator>true</cbc:ChargeIndicator>
          <cbc:Amount currencyID="$moneda">$totOtroCargo</cbc:Amount>
        </cac:AllowanceCharge>
      </#if>	
      </#if>	
      <!-- fin Cargos -->
      
        <!-- TOTAL ISC-->
        <cac:TaxTotal>
          <cbc:TaxAmount currencyID="$moneda">$monTribIsc</cbc:TaxAmount>
          <cac:TaxSubtotal>
            <cbc:TaxAmount currencyID="$moneda">$monTribIsc</cbc:TaxAmount>
            <cac:TaxCategory>
              <cac:TaxScheme>
                <cbc:ID>2000</cbc:ID>
                <cbc:Name>ISC</cbc:Name>
                <cbc:TaxTypeCode>EXC</cbc:TaxTypeCode>
              </cac:TaxScheme>
            </cac:TaxCategory>
          </cac:TaxSubtotal>
        </cac:TaxTotal>
        <!-- TOTAL IGV-->
        <cac:TaxTotal>
          <cbc:TaxAmount currencyID="$moneda">$monTribIgv</cbc:TaxAmount>
          <cac:TaxSubtotal>
            <cbc:TaxAmount currencyID="$moneda">$monTribIgv</cbc:TaxAmount>
            <cac:TaxCategory>
              <cac:TaxScheme>
                <cbc:ID>1000</cbc:ID>
                <cbc:Name>IGV</cbc:Name>
                <cbc:TaxTypeCode>VAT</cbc:TaxTypeCode>
              </cac:TaxScheme>
            </cac:TaxCategory>
          </cac:TaxSubtotal>
        </cac:TaxTotal>
        <!--Total OTROS TRIBUTOS-->
        <cac:TaxTotal>
          <cbc:TaxAmount currencyID="$moneda">$monTribOtro</cbc:TaxAmount>
          <cac:TaxSubtotal>
            <cbc:TaxAmount currencyID="$moneda">$monTribOtro</cbc:TaxAmount>
            <cac:TaxCategory>
              <cac:TaxScheme>
                <cbc:ID>9999</cbc:ID>
                <cbc:Name>OTROS</cbc:Name>
                <cbc:TaxTypeCode>OTH</cbc:TaxTypeCode>
              </cac:TaxScheme>
            </cac:TaxCategory>
          </cac:TaxSubtotal>
        </cac:TaxTotal>
      </sac:SummaryDocumentsLine>
EOD;
    }

    $val .= <<<EOD
    </SummaryDocuments>
EOD;


    return $val;
  } 
}