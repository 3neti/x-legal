# Research Workflow

XLegal treats legal research as architecture formation.

The purpose of this workflow is not to collect authorities for their own sake. It is to
explain how legal knowledge enters the ecosystem, becomes accountable reasoning, shapes
architectural language, and eventually influences implementation without pretending that
software can derive legal truth mechanically.

The central question is:

> How does a legal authority become software architecture?

The answer is not direct implementation. Legal authority must first be discovered,
evaluated, registered, characterized, translated into architectural consequences,
challenged, traced, and reviewed. Only then can engineering packages responsibly inherit
legal meaning.

## The Legal Knowledge Compiler

XLegal is a Legal Knowledge Compiler.

Law is the source language. Architecture is the target language. Implementation is a
later consumer of architecture, not a direct consumer of raw law.

This distinction matters because legal authorities are not executable specifications.
They are texts, interpretations, institutional signals, regulator positions, counsel
judgments, risks, and constraints. A system that moves directly from legal text to code
will hide judgment inside implementation. XLegal makes that judgment visible.

The compiler metaphor is intentionally disciplined:

- Source material must be preserved.
- Meaning must be evaluated before it is transformed.
- Transformations must be explicit.
- Ambiguity must remain visible.
- Generated architectural consequences must be traceable back to their inputs.
- Human judgment must remain responsible for every meaningful transition.

## Pipeline

```text
Legal Authority

↓

Discovery

↓

Collection

↓

Source Evaluation

↓

Registration

↓

Legal Characterization

↓

Theory Mapping

↓

Architectural Consequences

↓

Architectural Invariants

↓

Decision Records

↓

Knowledge Articles

↓

Traceability

↓

Package Impact

↓

Implementation Review

↓

Evidence

↓

External Counsel Review

↓

Regulatory Engagement
```

No stage should be skipped. Some stages may be light for low-risk sources, but the
workflow should remain visible so future contributors can understand where a legal
claim entered the system and how it acquired architectural force.

## Legal Authority

Legal Authority is the source material that may affect the ecosystem's legal
architecture.

- Why this stage exists: to distinguish source material from commentary, intuition, or
  architectural preference.
- Inputs: statutes, regulations, circulars, regulator publications, official guidance,
  cases, formal opinions, regulator communications, or secondary sources.
- Outputs: candidate authority requiring intake.
- Responsible party: AI may assist with identification; a Human Architecture Steward
  decides whether a source belongs in the workflow.
- Typical artifacts: source references, citations, source location notes.
- Relationship to the next stage: a candidate authority enters Discovery when it may be
  relevant to x-change, Treasury architecture, Pay Code architecture, settlement, client
  funds, regulatory characterization, or auditability.

## Discovery

Discovery identifies material that may matter.

- Why this stage exists: to surface relevant material before interpretation begins.
- Inputs: candidate legal authorities, research questions, open issues, adverse
  arguments, counsel requests, or regulatory concerns.
- Outputs: discovered source candidates with preliminary relevance notes.
- Responsible party: AI may assist; Human Architecture Steward reviews relevance.
- Typical artifacts: discovery notes, search trails, candidate source list.
- Relationship to the next stage: discovered sources move to Collection only when they
  are worth preserving with provenance.

## Collection

Collection preserves the source in a form the ecosystem can reference.

- Why this stage exists: to prevent reasoning from depending on memory, excerpts, or
  unattributed summaries.
- Inputs: discovered source candidates.
- Outputs: retained source references with enough metadata to support later review.
- Responsible party: AI may organize; Human Architecture Steward confirms collection
  adequacy.
- Typical artifacts: links, file references, access dates, source metadata, source type.
- Relationship to the next stage: collected sources move to Source Evaluation before
  they may shape characterization or architecture.

## Source Evaluation

Source Evaluation asks whether the material is trustworthy, authoritative, current, and
fit for its intended use.

- Why this stage exists: to keep low-quality or stale material from acquiring undue
  architectural influence.
- Inputs: collected sources and metadata.
- Outputs: evaluated source posture, including authority level, reliability, recency,
  jurisdiction, and limits.
- Responsible party: Human Architecture Steward; AI may normalize and compare metadata.
- Typical artifacts: evaluation notes under the
  [Source Evaluation Protocol](./SOURCE_EVALUATION_PROTOCOL.md).
- Relationship to the next stage: only evaluated sources should be registered as
  architecture-relevant authorities.

## Registration

Registration records the authority in the system of record.

- Why this stage exists: to give every authority an address, provenance, status, and
  review posture.
- Inputs: evaluated source material.
- Outputs: entries in the [Legal Authority Register](./LEGAL_AUTHORITY_REGISTER.md).
- Responsible party: Human Architecture Steward.
- Typical artifacts: authority register rows, source status, provenance notes,
  relationship notes.
- Relationship to the next stage: registered authorities become available for legal
  characterization.

## Legal Characterization

Legal Characterization asks what legal role, risk, or classification the authority may
bear on.

- Why this stage exists: to separate legal analysis from engineering implementation.
- Inputs: registered authorities, open questions, adverse arguments, and existing
  characterization documents.
- Outputs: candidate characterization effects without final legal conclusions.
- Responsible party: Human Architecture Steward, with external counsel where risk is
  high.
- Typical artifacts: updates to
  [Legal Characterization](../characterization/LEGAL_CHARACTERIZATION.md), open
  questions, and characterization notes.
- Relationship to the next stage: candidate characterization effects become legal
  theories only when their assumptions and consequences are explicit.

## Theory Mapping

Theory Mapping connects candidate characterizations to possible consequences.

- Why this stage exists: to prevent the ecosystem from treating one theory as settled
  merely because it is documented.
- Inputs: characterization notes, authorities, assumptions, counterarguments, and open
  questions.
- Outputs: mapped legal theories and possible consequences.
- Responsible party: Human Architecture Steward; AI may identify inconsistencies and
  missing links.
- Typical artifacts: updates to [Legal Theories](../characterization/LEGAL_THEORIES.md)
  and [Adverse Arguments](../research/ADVERSE_ARGUMENTS.md).
- Relationship to the next stage: theories become architectural consequences only when
  the software meaning of the theory is described.

## Architectural Consequences

Architectural Consequences explain what the legal theory would require the ecosystem to
preserve, avoid, expose, or prove.

- Why this stage exists: to translate legal reasoning into architectural obligations
  without jumping to code.
- Inputs: legal theories, characterization notes, source authorities, and adverse
  arguments.
- Outputs: candidate consequences for terminology, data model, workflows, audit trails,
  package boundaries, review obligations, and evidence.
- Responsible party: Human Architecture Steward.
- Typical artifacts: architecture notes, consequence mappings, traceability candidates.
- Relationship to the next stage: durable consequences become candidate Architectural
  Invariants.

## Architectural Invariants

Architectural Invariants are constraints that should remain true across implementation
unless deliberately superseded.

- Why this stage exists: to give engineering packages stable legal-architecture
  boundaries.
- Inputs: architectural consequences, traceability candidates, and decision context.
- Outputs: accepted or proposed invariants.
- Responsible party: Human Architecture Steward.
- Typical artifacts: updates to
  [Architectural Invariants](../architecture/ARCHITECTURAL_INVARIANTS.md).
- Relationship to the next stage: invariants often require Decision Records when they
  change vocabulary, package responsibilities, or system direction.

## Decision Records

Decision Records preserve why the architecture chose one path over another.

- Why this stage exists: to keep architectural judgment reviewable over time.
- Inputs: invariants, competing theories, adverse arguments, implementation constraints,
  and review posture.
- Outputs: proposed, accepted, superseded, or historical decision records.
- Responsible party: Human Architecture Steward.
- Typical artifacts: Legal Decision Records under [docs/decisions](../decisions/README.md).
- Relationship to the next stage: decisions become source material for Knowledge
  Articles when they explain recurring questions.

## Knowledge Articles

Knowledge Articles are curated syntheses, not research notes.

- Why this stage exists: to preserve institutional understanding in a form future
  contributors can use.
- Inputs: authorities, characterization, theories, invariants, decision records,
  traceability, evidence, open questions, and adverse arguments.
- Outputs: Knowledge Articles that explain current understanding and remaining
  uncertainty.
- Responsible party: Human Architecture Steward; AI may draft and organize; external
  counsel may review high-risk content.
- Typical artifacts: articles based on
  [Knowledge Governance](../knowledge/KNOWLEDGE_GOVERNANCE.md) and
  [Knowledge Template](../knowledge/KNOWLEDGE_TEMPLATE.md).
- Relationship to the next stage: Knowledge Articles should identify traceability links
  rather than inventing new conclusions.

## Traceability

Traceability links legal reasoning to architecture and eventual implementation review.

- Why this stage exists: to make future audits possible.
- Inputs: authorities, characterization, theories, invariants, decisions, Knowledge
  Articles, and package impact notes.
- Outputs: mapped relationships from business requirement to authority, invariant,
  package, class, method, test, and evidence.
- Responsible party: Human Architecture Steward; AI may detect missing links.
- Typical artifacts: updates to the
  [Regulatory Traceability Matrix](../traceability/REGULATORY_TRACEABILITY_MATRIX.md).
- Relationship to the next stage: traceable consequences can be assessed for package
  impact.

## Package Impact

Package Impact identifies which engineering packages may need to respect the legal
architecture.

- Why this stage exists: to avoid scattering legal assumptions across the ecosystem.
- Inputs: traceability mappings, invariants, decisions, and Knowledge Articles.
- Outputs: package impact notes, affected boundaries, and review prompts.
- Responsible party: Human Architecture Steward.
- Typical artifacts: package impact records, issue notes, architecture review prompts.
- Relationship to the next stage: impacted packages require implementation review before
  legal meaning is relied upon.

## Implementation Review

Implementation Review checks whether implementation respects the architecture.

- Why this stage exists: to ensure code follows architecture that has been shaped by
  legal reasoning.
- Inputs: package impact notes, invariants, traceability rows, package code, tests, and
  evidence expectations.
- Outputs: review findings, missing evidence, test needs, or architecture feedback.
- Responsible party: Human Architecture Steward with engineering maintainers.
- Typical artifacts: review notes, traceability updates, implementation questions.
- Relationship to the next stage: implementation review produces evidence needs.

## Evidence

Evidence records whether the system can prove what the legal architecture requires it to
prove.

- Why this stage exists: to make claims auditable rather than aspirational.
- Inputs: implementation review, tests, logs, journals, package behavior, documentation,
  and traceability links.
- Outputs: evidence references, gaps, and audit notes.
- Responsible party: Human Architecture Steward with engineering maintainers.
- Typical artifacts: evidence notes, traceability updates, test references.
- Relationship to the next stage: organized evidence prepares the work for external
  counsel review.

## External Counsel Review

External Counsel Review validates and challenges the organized reasoning.

- Why this stage exists: to bring qualified legal judgment to material questions without
  forcing counsel to reconstruct the package from raw fragments.
- Inputs: authorities, register entries, characterization, theories, invariants,
  decisions, Knowledge Articles, adverse arguments, traceability, evidence, and open
  questions.
- Outputs: counsel comments, risk analysis, formal opinion readiness, revised questions,
  and possible architecture changes.
- Responsible party: External Counsel.
- Typical artifacts: counsel review packets, issue lists, formal opinion drafts, review
  notes.
- Relationship to the next stage: counsel-reviewed reasoning can support regulatory
  engagement planning when engagement is appropriate.

## Regulatory Engagement

Regulatory Engagement is the structured presentation of reviewed reasoning to a regulator
or regulator-facing process.

- Why this stage exists: to ensure engagement is grounded in organized evidence and
  disciplined architecture rather than ad hoc explanation.
- Inputs: counsel-reviewed materials, authority register, traceability, open questions,
  evidence, and engagement strategy.
- Outputs: regulator-facing submissions, meeting materials, response logs, and updated
  architecture questions.
- Responsible party: External Counsel and accountable human leadership.
- Typical artifacts: engagement packets, correspondence records, response summaries,
  updated Knowledge Articles and traceability rows.
- Relationship to the next stage: regulator feedback re-enters Discovery, Collection,
  Source Evaluation, or Characterization depending on its content.

## Roles

### AI

AI may assist with collection, normalization, summarization, organization, candidate
consequence identification, inconsistency detection, and missing-link detection.

AI must not be treated as legal counsel. AI output is draft material until a Human
Architecture Steward accepts it into the workflow.

### Human Architecture Steward

The Human Architecture Steward is responsible for legal characterization, architectural
decisions, acceptance of invariants, package impact, documentation quality, and workflow
governance.

This role owns the translation from legal reasoning into architecture.

### External Counsel

External Counsel is responsible for validating legal reasoning, identifying regulatory
risks, challenging assumptions, preparing formal legal opinions, and advising on BSP or
other regulator engagement.

Counsel should enter near the end of the workflow with organized materials. Their role
is not to reconstruct research from scattered notes. Their role is to critique and
improve reasoning that has already been made visible.

## Relationship to Existing Documents

- [SOURCE_EVALUATION_PROTOCOL.md](./SOURCE_EVALUATION_PROTOCOL.md) defines how sources
  are evaluated before registration.
- [LEGAL_AUTHORITY_REGISTER.md](./LEGAL_AUTHORITY_REGISTER.md) is the system of record
  for authorities admitted into the workflow.
- [LEGAL_CHARACTERIZATION.md](../characterization/LEGAL_CHARACTERIZATION.md) receives
  candidate characterization effects from registered authorities.
- [LEGAL_THEORIES.md](../characterization/LEGAL_THEORIES.md) maps possible legal
  theories to architectural consequences.
- [ARCHITECTURAL_INVARIANTS.md](../architecture/ARCHITECTURAL_INVARIANTS.md) preserves
  durable constraints that engineering packages should respect.
- [REGULATORY_TRACEABILITY_MATRIX.md](../traceability/REGULATORY_TRACEABILITY_MATRIX.md)
  links legal reasoning to architecture, packages, implementation, tests, and evidence.
- [KNOWLEDGE_SYSTEM.md](../knowledge/KNOWLEDGE_SYSTEM.md) explains why XLegal preserves
  institutional memory rather than isolated answers.
- [RULE_OF_TRANSLATION.md](../grammar/RULE_OF_TRANSLATION.md) governs the discipline of
  moving from legal source to architecture without collapsing distinct reasoning steps.
- [HYDRATION_BACKLOG.md](../HYDRATION_BACKLOG.md) tracks which documents still need
  additional maturity, stability, population, or review.

## Workflow Invariants

- Every authority must preserve provenance.
- Every architectural consequence must be traceable.
- Every Knowledge Article must synthesize existing artifacts rather than invent new
  conclusions.
- Every implementation consequence must be reviewable.
- Every legal conclusion must remain distinguishable from architectural interpretation.
- Uncertainty must remain visible.
- No document should acquire architectural force merely because it is well written.
- No implementation should become the first place where legal reasoning appears.

## Knowledge Articles as Products

Knowledge Articles are products of the workflow.

They should synthesize authorities, characterization, theories, invariants, decision
records, traceability, evidence, adverse arguments, and open questions. They should make
the current state of understanding usable without flattening uncertainty into premature
answers.

A Knowledge Article should not be the first place a new legal theory appears. If an
article requires new legal reasoning, that reasoning should enter the workflow through
authority registration, characterization, theory mapping, or decision records before the
article presents it as ecosystem knowledge.

## Documentation Governance

Any future document introducing new legal reasoning should identify where it enters this
workflow.

No document should bypass the workflow. The system remains trustworthy only if source
material, interpretation, architectural translation, package impact, implementation
review, evidence, counsel review, and regulatory engagement stay distinguishable.

This workflow does not classify x-change, Pay Code, Treasury Position, Client Funds, or
any regulatory status. It defines the method by which future classification work can be
made visible, reviewable, and traceable.
