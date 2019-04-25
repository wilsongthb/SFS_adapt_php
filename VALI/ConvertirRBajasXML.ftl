<?xml version="1.0" encoding="windows-1250"?>
<VoidedDocuments xmlns="urn:sunat:names:specification:ubl:peru:schema:xsd:VoidedDocuments-1" 
                xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2" 
                xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2" 
                xmlns:ext="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2" 
                xmlns:sac="urn:sunat:names:specification:ubl:peru:schema:xsd:SunatAggregateComponents-1" 
                xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
                xsi:schemaLocation="urn:sunat:names:specification:ubl:peru:schema:xsd:VoidedDocuments-1 UBLPE-VoidedDocuments-1.0.xsd">                 
<ext:UBLExtensions>
</ext:UBLExtensions>        
 <cbc:UBLVersionID>${ublVersionIdSwf}</cbc:UBLVersionID>
 <cbc:CustomizationID>${CustomizationIdSwf}</cbc:CustomizationID>
 <cbc:ID>${idComunicacion}</cbc:ID>
 <cbc:ReferenceDate>${fechaDocumentoBaja}</cbc:ReferenceDate>
 <cbc:IssueDate>${fechaComunicacioBaja}</cbc:IssueDate>
 <cac:Signature>
    <cbc:ID>${nroRucEmisorSwf}</cbc:ID>
    <cbc:Note>${identificadorFacturadorSwf}</cbc:Note>
    <cac:SignatoryParty>
        <cac:PartyIdentification>
          <cbc:ID>${nroRucEmisorSwf}</cbc:ID>
        </cac:PartyIdentification>
        <cac:PartyName>
          <cbc:Name><![CDATA[${nombreComercialSwf}]]></cbc:Name>
        </cac:PartyName>
        <cac:AgentParty>
          <cac:PartyIdentification>
            <cbc:ID>${nroRucEmisorSwf}</cbc:ID>
          </cac:PartyIdentification>
          <cac:PartyName>
            <cbc:Name><![CDATA[${razonSocialSwf}]]></cbc:Name>
          </cac:PartyName>
          <cac:PartyLegalEntity>
            <cbc:RegistrationName><![CDATA[${razonSocialSwf}]]></cbc:RegistrationName>
          </cac:PartyLegalEntity>
        </cac:AgentParty>
      </cac:SignatoryParty>
      <cac:DigitalSignatureAttachment>
        <cac:ExternalReference>
          <cbc:URI>${identificadorFirmaSwf}</cbc:URI>
        </cac:ExternalReference>
      </cac:DigitalSignatureAttachment>
 </cac:Signature>
  
 <cac:AccountingSupplierParty>
  <cbc:CustomerAssignedAccountID>${nroRucEmisorSwf}</cbc:CustomerAssignedAccountID>
  <cbc:AdditionalAccountID>${tipDocuEmisorSwf}</cbc:AdditionalAccountID>
  <cac:Party>
    <cac:PartyLegalEntity>
      <cbc:RegistrationName><![CDATA[${razonSocialSwf}]]></cbc:RegistrationName>
    </cac:PartyLegalEntity>
  </cac:Party>
  </cac:AccountingSupplierParty>
  <#list listaResumen as resumen>
  <sac:VoidedDocumentsLine>
    <cbc:LineID>${resumen.linea}</cbc:LineID>
    <cbc:DocumentTypeCode>${resumen.tipoDocumentoBaja}</cbc:DocumentTypeCode>
    <sac:DocumentSerialID>${resumen.serieDocumentoBaja}</sac:DocumentSerialID>
    <sac:DocumentNumberID>${resumen.nroDocumentoBaja}</sac:DocumentNumberID>
    <sac:VoidReasonDescription>${resumen.motivoBajaDocumento}</sac:VoidReasonDescription>
  </sac:VoidedDocumentsLine>
  </#list>
</VoidedDocuments>