# XLegal Documentation

This directory is the legal architecture library for `3neti/x-legal`.

It is organized so future legal authorities, characterization theories,
architectural invariants, decision records, and traceability artifacts can grow
without collapsing into one crowded folder.

## Compass

- [X_LEGAL_COMPASS.md](./compass/X_LEGAL_COMPASS.md): principal Compass document
  for philosophy, scope, relationships, evolution, and AI-assisted legal
  architecture.
- [NON_GOALS.md](./compass/NON_GOALS.md): boundaries that keep XLegal from becoming
  legal advice, a compliance guarantee, or a substitute for counsel.

## Architecture

- [LEGAL_ARCHITECTURE.md](./architecture/LEGAL_ARCHITECTURE.md): working legal model
  for the Treasury and Settlement architecture.
- [ARCHITECTURAL_INVARIANTS.md](./architecture/ARCHITECTURAL_INVARIANTS.md):
  proposed invariants pending legal review.
- [IMPLEMENTATION_PLAN.md](./architecture/IMPLEMENTATION_PLAN.md): phased plan for
  implementing the legal knowledge system.

## Grammar

- [LEGAL_GRAMMAR.md](./grammar/LEGAL_GRAMMAR.md): canonical relationship grammar for
  Principal, Treasury Mandate, Client Funds, Treasury Position, Lien, Settlement
  Instruction, Pay Code, Journal, and Legal Trace.
- [RULE_OF_TRANSLATION.md](./grammar/RULE_OF_TRANSLATION.md): discipline for moving
  from availability to authority, applicability, architecture, and implementation.

## Authorities

- [LEGAL_AUTHORITY_REGISTER.md](./authorities/LEGAL_AUTHORITY_REGISTER.md):
  disciplined format for registering future authorities.
- [SOURCE_EVALUATION_PROTOCOL.md](./authorities/SOURCE_EVALUATION_PROTOCOL.md):
  methodology for evaluating sources before they shape architecture.
- [bsp/](./authorities/bsp/README.md): future BSP authorities and guidance.
- [statutes/](./authorities/statutes/README.md): future statutory materials.
- [constitutional/](./authorities/constitutional/README.md): future constitutional
  sources.
- [secondary/](./authorities/secondary/README.md): future commentary, research, and
  non-binding sources.

## Characterization

- [LEGAL_CHARACTERIZATION.md](./characterization/LEGAL_CHARACTERIZATION.md):
  candidate characterizations for x-change without conclusions.
- [LEGAL_THEORIES.md](./characterization/LEGAL_THEORIES.md): architectural
  consequences if candidate legal theories apply.

## Traceability

- [REGULATORY_TRACEABILITY_MATRIX.md](./traceability/REGULATORY_TRACEABILITY_MATRIX.md):
  design objective for connecting business requirements, authorities, invariants,
  packages, classes, methods, tests, and audit evidence.

## Knowledge

- [knowledge/README.md](./knowledge/README.md): institutional legal knowledge system
  for preserving reasoning, not merely answers.
- [KNOWLEDGE_SYSTEM.md](./knowledge/KNOWLEDGE_SYSTEM.md): philosophy of legal memory,
  institutional reasoning, traceability, and versioned understanding.
- [KNOWLEDGE_GOVERNANCE.md](./knowledge/KNOWLEDGE_GOVERNANCE.md): lifecycle for
  Knowledge Articles as living legal position papers.
- [KNOWLEDGE_TEMPLATE.md](./knowledge/KNOWLEDGE_TEMPLATE.md): canonical format for
  future Knowledge Articles.
- [FAQ_INDEX.md](./knowledge/FAQ_INDEX.md): question-oriented index for future
  Knowledge Articles.
- [HYDRATION_BACKLOG.md](./HYDRATION_BACKLOG.md): documentation maturity and hydration
  priority tracking.

## Research

- [ADVERSE_ARGUMENTS.md](./research/ADVERSE_ARGUMENTS.md): skeptical regulatory and
  counterparty arguments to preserve as design inputs.
- [OPEN_QUESTIONS.md](./research/OPEN_QUESTIONS.md): unresolved questions requiring
  research, human judgment, counsel review, or regulatory engagement.

## Decisions

- [decisions/README.md](./decisions/README.md): Legal Decision Records index.
- [0001-treasury-over-wallet.md](./decisions/0001-treasury-over-wallet.md):
  proposed decision to prefer Treasury terminology over wallet terminology.

## Governance

Keep this library constitutional rather than checklist-driven. New documents should
preserve legal uncertainty honestly, distinguish hypotheses from reviewed
positions, and link back to traceability wherever possible.

Every substantive documentation change shall include a review of the Knowledge
System. This does not require changing the Knowledge System every time; it requires
checking whether the change affects an existing or future Knowledge Article,
question index, legal position, traceability link, or revision history.

The hydration backlog is a standing maintenance artifact for this purpose.
