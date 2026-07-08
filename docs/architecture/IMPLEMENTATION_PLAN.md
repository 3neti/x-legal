# Implementation Plan

This plan describes implementation of the XLegal knowledge system. It does not
describe implementation of law, legal advice, regulatory status, money movement, or
payment behavior.

The goal is to build an evolving body of legal architecture that can guide future
engineering and survive review.

## Phase 0: Package scaffold

Status: Started

Purpose: Establish the package as a documentation-first legal architecture space.

AI tasks:

- Draft initial docs, contracts, value objects, and placeholder tests.
- Keep legal conclusions marked as provisional.

Human tasks:

- Confirm package ownership, naming, repository boundaries, and desired tone.
- Identify the first engineering packages that will eventually need traceability.

External counsel tasks:

- None required at scaffold stage unless reviewing overall direction.

## Phase 1: Grammar, invariants, and decision records

Status: Current phase

Purpose: Define the constitutional vocabulary of the ecosystem before the codebase
inherits inconsistent language.

AI tasks:

- Strengthen the legal grammar.
- Draft proposed invariants.
- Draft Legal Decision Records for major vocabulary choices.
- Identify internal inconsistencies across documents.

Human tasks:

- Decide which concepts are accepted working vocabulary.
- Mark sensitive or disputed concepts for counsel review.
- Reject terms that create unwanted product or regulatory implications.

External counsel tasks:

- Review high-impact vocabulary choices where terminology may affect regulatory
  characterization.

## Phase 2: Legal authorities

Status: Planned

Purpose: Gather the authorities, guidance, circulars, statutes, cases, contracts,
policies, and counsel notes that the architecture must respect.

AI tasks:

- Organize source lists.
- Summarize candidate authorities as drafts.
- Propose links between authorities and existing grammar.

Human tasks:

- Select authoritative sources.
- Separate primary authority from commentary, internal assumptions, and product
  preferences.
- Maintain source provenance.

External counsel tasks:

- Confirm which authorities are relevant.
- Correct overbroad or incomplete summaries.
- Identify missing authorities.

## Phase 3: Regulatory mapping

Status: Planned

Purpose: Convert authorities and concerns into traceable constraints.

AI tasks:

- Draft requirement and concern rows in the traceability matrix.
- Propose architectural consequences.
- Flag unresolved factual dependencies.

Human tasks:

- Review mappings for accuracy.
- Assign status and ownership.
- Decide which constraints should become proposed invariants.

External counsel tasks:

- Validate high-risk mappings.
- Distinguish legal requirement, regulatory concern, commercial risk, and internal
  policy preference.

## Phase 4: Adversarial review

Status: Planned

Purpose: Stress-test the architecture against skeptical interpretations.

AI tasks:

- Generate adverse arguments.
- Compare product language against legal grammar.
- Identify facts that could undermine the intended model.

Human tasks:

- Decide which adverse arguments are credible enough to affect architecture.
- Prioritize remediation.
- Preserve unresolved objections in the open-question register.

External counsel tasks:

- Review the strongest adverse arguments.
- Advise whether architecture, contracts, disclosures, or regulatory engagement
  should change.

## Phase 5: Architecture refinement

Status: Planned

Purpose: Feed the legal architecture back into engineering design.

AI tasks:

- Propose trace links from documents to packages, classes, methods, and tests.
- Draft issue templates or implementation notes for engineering teams.

Human tasks:

- Update engineering architecture to preserve approved invariants.
- Decide whether new package interfaces, tests, or audit records are required.
- Remove product or code vocabulary that conflicts with the legal grammar.

External counsel tasks:

- Review refined architecture where legal characterization depends on technical
  controls.

## Phase 6: External counsel review

Status: Planned

Purpose: Submit the working model for formal legal review before relying on it for
major product or regulatory decisions.

AI tasks:

- Prepare briefing packs, question lists, and trace summaries.
- Identify unresolved conflicts across documents.

Human tasks:

- Provide factual context to counsel.
- Decide which questions require written advice.
- Record counsel feedback as decisions, constraints, or open questions.

External counsel tasks:

- Review the model.
- Confirm, reject, or refine the legal assumptions.
- Identify required disclosures, controls, registrations, or engagement steps.

## Phase 7: Regulatory engagement

Status: Planned

Purpose: Prepare the ecosystem to explain its architecture clearly if regulatory
engagement is required or strategically advisable.

AI tasks:

- Draft non-submission summaries for internal review.
- Prepare traceability views by issue, feature, and package.
- Generate checklists of facts that must be verified before engagement.

Human tasks:

- Decide whether, when, and how to engage regulators.
- Ensure factual accuracy of all representations.
- Coordinate legal, product, operations, and engineering participants.

External counsel tasks:

- Lead or advise regulatory engagement strategy.
- Review materials before external use.
- Translate feedback into legal architecture updates.

## Operating rule

No phase should convert uncertainty into certainty merely because implementation
needs to move. If a legal question remains open, the architecture should name it and
build around that fact.
