# Hydration Backlog

This backlog prevents documentation growth from outrunning understanding. It tracks which
articles are foundational, which are templates, which are skeletons, and which are
navigational artifacts that must be kept synchronized as legal architecture evolves.

It tracks two orthogonal dimensions:

- Maturity: how complete the artifact is for its present purpose.
- Stability: how likely the artifact will change as legal understanding evolves.

## Maturity model

- **Seed**: scaffold or explicit placeholder with defined intent, not yet operational.
- **Draft**: complete enough to support work, but expected to change with early feedback.
- **Reference**: stable enough for repeated use and onboarding, still improvable.
- **Mature**: well-formed and used consistently across package documentation.
- **Enduring**: long-lived and changed only for philosophy-level reasons.

## Stability model

- **Experimental**: testing assumptions, candidate vocabulary, or provisional direction.
- **Provisional**: useful as a working draft, but likely to evolve.
- **Evolving**: already serving decision-making, but responsive to authority or review outcomes.
- **Stable**: structurally dependable with low expected churn.
- **Historical**: preserved for traceability and not expected to govern current architecture.

## Governance interpretation

- Maturity answers: is this document currently ready to be used in practice?
- Stability answers: when should we expect meaningful revision?
- High maturity is not equivalent to legal finality.
- Low stability can be intentional and healthy when uncertainty is explicitly preserved.
- Governance depends on clear uncertainty signals, not polished certainty.

## Current hydration classification

| Document | Category | Maturity | Stability | Current State | Hydration Need | Priority | Recommended Model | Owner | Last Reviewed | Next Review Trigger | Notes |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| `docs/README.md` | Generated or Navigational / Maintain Automatically | Reference | Stable | Consolidated directory map and maintenance guidance | Keep aligned with added/renamed docs | P2 | Human Review | Human Review | TBD | When documentation taxonomy changes | Regenerates through editorial discipline |
| `docs/compass/X_LEGAL_COMPASS.md` | Constitutional / Mature | Mature | Evolving | Full philosophical and governance framing | Low-value stabilization only | P2 | Human Review | Human Review | TBD | After architecture changes | Central source of direction |
| `docs/compass/NON_GOALS.md` | Constitutional / Mature | Mature | Evolving | Clear boundary controls and anti-drift guidance | Keep aligned with scope changes | P2 | Human Review | Human Review | TBD | When documentation taxonomy changes | Already stable for current stage |
| `docs/architecture/LEGAL_ARCHITECTURE.md` | Constitutional / Mature | Mature | Evolving | Working legal model with explicit caveats | Refine definitions as architecture settles | P1 | GPT-5.5 / Human Review | GPT-5.5 + Human | TBD | After first BSP authority mapping | Major anchor for legal reasoning |
| `docs/architecture/ARCHITECTURAL_INVARIANTS.md` | Constitutional / Mature | Draft | Evolving | Proposed invariants with explicit review posture | Convert to traceable invariants over time | P1 | GPT-5.5 / Human Review | GPT-5.5 + Human | TBD | After first regulatory mapping | Proposed state already preserved |
| `docs/architecture/IMPLEMENTATION_PLAN.md` | Constitutional / Mature | Mature | Evolving | Phased plan for legal knowledge implementation | Hydrate with execution milestones | P2 | Human Review | Human Review | TBD | On package release | Delivery and sequencing foundation |
| `docs/grammar/LEGAL_GRAMMAR.md` | Constitutional / Mature | Mature | Stable | Canonical relationship grammar | Expand examples as concepts stabilize | P1 | GPT-5.5 / Human Review | GPT-5.5 + Human | TBD | After first Knowledge Article draft | Core conceptual anchor |
| `docs/grammar/RULE_OF_TRANSLATION.md` | Constitutional / Mature | Mature | Stable | Core translation doctrine in place | Add examples during audits and reviews | P2 | Human Review | Human Review | TBD | After architecture changes | Important guardrail for reasoning chain |
| `docs/authorities/LEGAL_AUTHORITY_REGISTER.md` | Template / Needs Population | Draft | Evolving | Register schema is defined | Add real entries and mappings | P0 | Human Review / External Counsel | Human Review | TBD | After first BSP authority mapped | High-impact onboarding asset |
| `docs/authorities/RESEARCH_WORKFLOW.md` | Constitutional / Template | Seed | Provisional | Not yet created (required before authority ingestion) | Draft workflow and sequencing for legal intake | P0 | GPT-5.5 / Human Review | Human Review | TBD | Before first authority is registered | New required first-substantive work item |
| `docs/authorities/SOURCE_EVALUATION_PROTOCOL.md` | Constitutional / Mature | Mature | Stable | Methodology fully described | Keep synced to intake process | P1 | Human Review | Human Review | TBD | After authority intake workflow changes | Quality bar for authority onboarding |
| `docs/authorities/bsp/README.md` | Skeleton / Needs Hydration | Seed | Experimental | Folder purpose only | Add future BSP-specific indexing discipline | P2 | Human Review | Human Review | TBD | When BSP authorities are added | Intended as scaffold |
| `docs/authorities/statutes/README.md` | Skeleton / Needs Hydration | Seed | Experimental | Folder purpose only | Add statutory intake guidance | P2 | Human Review | Human Review | TBD | When statutes are added | Intended as scaffold |
| `docs/authorities/constitutional/README.md` | Skeleton / Needs Hydration | Seed | Experimental | Folder purpose only | Add constitutional guidance when used | P2 | Human Review | Human Review | TBD | When constitutional questions are raised | Intended as scaffold |
| `docs/authorities/secondary/README.md` | Skeleton / Needs Hydration | Seed | Experimental | Folder purpose only | Add secondary-source workflow and constraints | P2 | Human Review | Human Review | TBD | When secondary materials are added | Intended as scaffold |
| `docs/characterization/LEGAL_CHARACTERIZATION.md` | Constitutional / Mature | Mature | Evolving | Candidate legal characterizations documented | Hydrate with evidence-backed reasoning as intake deepens | P1 | GPT-5.5 / External Counsel | GPT-5.5 | TBD | After first BSP authority mapping | Foundation for regulatory framing |
| `docs/characterization/LEGAL_THEORIES.md` | Constitutional / Mature | Mature | Evolving | Theory-to-consequence mapping established | Add stronger constraints and counter-evidence | P1 | GPT-5.5 / External Counsel | GPT-5.5 | TBD | After first Knowledge Article draft | Architecture-reasoning alignment |
| `docs/traceability/REGULATORY_TRACEABILITY_MATRIX.md` | Template / Needs Population | Draft | Evolving | Design objective + starter rows | Add rows and status progression | P0 | GPT-5.5 / Human Review | Human Review | TBD | After first Knowledge Article draft | Key operational bridge document |
| `docs/research/ADVERSE_ARGUMENTS.md` | Constitutional / Mature | Mature | Evolving | Canonical adverse framing exists | Expand with updated arguments as facts evolve | P1 | GPT-5.5 / Human Review | GPT-5.5 | TBD | When new adverse argument discovered | High-value risk-preparedness artifact |
| `docs/research/OPEN_QUESTIONS.md` | Constitutional / Mature | Mature | Evolving | Open questions registered and categorized | Resolve, defer, or archive as decisions emerge | P1 | Human Review / External Counsel | Human Review | TBD | After external counsel review | Core unresolved-trust ledger |
| `docs/decisions/README.md` | Generated or Navigational / Maintain Automatically | Reference | Stable | Decision index with single entry | Keep in sync with new ADRs | P2 | Human Review | Human Review | TBD | After new decision draft accepted | Requires periodic maintenance |
| `docs/decisions/0001-treasury-over-wallet.md` | Constitutional / Mature | Mature | Historical | ADR for terminology shift | Keep for traceability and possible supersession context | P2 | Human Review | Human Review | TBD | On taxonomy change | Should remain readable for governance |
| `docs/knowledge/README.md` | Constitutional / Mature | Mature | Evolving | Knowledge subsystem framing complete | Add category-specific usage notes over time | P2 | Human Review | Human Review | TBD | After first Knowledge Article published | Institutional entry point |
| `docs/knowledge/KNOWLEDGE_SYSTEM.md` | Constitutional / Mature | Mature | Evolving | Philosophy and traceability rationale established | Add examples as governance use increases | P2 | Human Review | Human Review | TBD | After external counsel review | Core institutional memory document |
| `docs/knowledge/KNOWLEDGE_GOVERNANCE.md` | Constitutional / Mature | Mature | Evolving | Lifecycle model and review posture defined | Tie guidance to real article revisions | P1 | Human Review / External Counsel | Human Review | TBD | After first adverse argument cycle | Needs operational adoption |
| `docs/knowledge/KNOWLEDGE_TEMPLATE.md` | Template / Needs Population | Draft | Evolving | Canonical article format defined | Populate first article set and reduce divergence | P0 | Human Review | Human Review | TBD | On Knowledge Article draft start | Foundation for consistency |
| `docs/knowledge/FAQ_INDEX.md` | Template / Needs Population | Draft | Evolving | Question index declared without answers | Hydrate into real articles over time | P0 | GPT-5.5 / Human Review | Human Review | TBD | After first Knowledge Article drafted | Primary source for missing-article detection |
| `docs/knowledge/constitutional/README.md` | Skeleton / Needs Hydration | Seed | Experimental | Folder-level placeholder | Populate when first constitutional article arrives | P3 | Human Review | Human Review | TBD | When constitutional questions added | Future-ready placeholder |
| `docs/knowledge/concepts/README.md` | Skeleton / Needs Hydration | Seed | Evolving | Folder-level placeholder | Add article conventions and first drafts | P1 | GPT-5.5 / Human Review | Human Review | TBD | After first concepts article | Prevents concept drift |
| `docs/knowledge/architecture/README.md` | Skeleton / Needs Hydration | Seed | Evolving | Folder-level placeholder | Add architecture conventions and cross-links | P1 | GPT-5.5 / Human Review | Human Review | TBD | After first architecture article | Needed with implementation growth |
| `docs/knowledge/regulators/README.md` | Skeleton / Needs Hydration | Seed | Evolving | Folder-level placeholder | Add regulator-facing scaffolding | P1 | GPT-5.5 / External Counsel | External Counsel | TBD | Before first external counsel discussion | Supports future engagement readiness |
| `docs/knowledge/litigation/README.md` | Skeleton / Needs Hydration | Seed | Experimental | Folder-level placeholder | Add adversarial and dispute structure | P3 | GPT-5.5 / External Counsel | External Counsel | TBD | If litigation/dispute risk increases | Ready for future risk posture |
| `docs/knowledge/development/README.md` | Skeleton / Needs Hydration | Seed | Evolving | Folder-level placeholder | Add contributor workflow articles | P2 | Human Review | Human Review | TBD | After first workflow article added | Improves maintainability |
| `docs/HYDRATION_BACKLOG.md` | Constitutional / Mature | Mature | Evolving | Governance inventory and sequencing in place | Regenerate after major taxonomic shifts | P2 | Human Review | Human Review | TBD | On package release | Governing backlog artifact |

## Skeleton and placeholder scan

The backlog tracks markers used to indicate intentional provisional status:

- `TBD` in `docs/authorities/LEGAL_AUTHORITY_REGISTER.md` and `docs/knowledge/KNOWLEDGE_TEMPLATE.md`
  - Interpretation: intentional placeholders for future authority rows and article fields.
- `draft` in `docs/architecture/IMPLEMENTATION_PLAN.md` and `docs/traceability/REGULATORY_TRACEABILITY_MATRIX.md`
  - Interpretation: draft status marks provisional sequencing and starter content.
- `proposed` in `docs/decisions/0001-treasury-over-wallet.md`, `docs/architecture/ARCHITECTURAL_INVARIANTS.md`, and `docs/traceability/REGULATORY_TRACEABILITY_MATRIX.md`
  - Interpretation: intentional provisional posture for ongoing review.
- `under analysis` and `pending` terms in `docs/architecture/IMPLEMENTATION_PLAN.md`, `docs/architecture/ARCHITECTURAL_INVARIANTS.md`, and `docs/traceability/REGULATORY_TRACEABILITY_MATRIX.md`
  - Interpretation: process-state labels appropriate for this phase.
- `future` in `docs/README.md`, `docs/authorities/*` README files, and `docs/knowledge/*/README.md`
  - Interpretation: explicit roadmap language for planned expansion.

No marker was treated as an error. Provisional language is part of the package doctrine.

## Missing Knowledge Articles

These questions should become standalone Knowledge Articles when prioritized:

- What is a Treasury Mandate? → `docs/knowledge/concepts/TREASURY_MANDATE.md` (Model: GPT-5.5, Priority: P1)
- What is a Treasury Position? → `docs/knowledge/concepts/TREASURY_POSITION.md` (Model: GPT-5.5, Priority: P1)
- What is Client Funds? → `docs/knowledge/concepts/CLIENT_FUNDS.md` (Model: GPT-5.5, Priority: P1)
- What does it mean for every peso to have a mandate? → `docs/knowledge/concepts/PESO_TRACEABILITY.md` (Model: GPT-5.5, Priority: P1)
- What makes a Treasury Position different from a stored balance? → `docs/knowledge/concepts/TREASURY_POSITION_VS_STORED_BALANCE.md` (Model: GPT-5.5, Priority: P1)
- What is a Pay Code? → `docs/knowledge/concepts/PAY_CODE.md` (Model: GPT-5.5, Priority: P1)
- Is Pay Code stored value? → `docs/knowledge/concepts/PAY_CODE_STORED_VALUE_RISK.md` (Model: GPT-5.5, Priority: P0)
- Why is Pay Code not treated as money? → `docs/knowledge/concepts/PAY_CODE_NOT_MONEY.md` (Model: GPT-5.5, Priority: P0)
- What facts could make Pay Code look like stored value? → `docs/knowledge/concepts/PAY_CODE_STORED_VALUE_FACTORS.md` (Model: GPT-5.5, Priority: P1)
- How does Pay Code relate to a Settlement Instruction? → `docs/knowledge/concepts/PAY_CODE_AND_SETTLEMENT_INSTRUCTION.md` (Model: GPT-5.5, Priority: P1)
- Is x-change an EMI? → `docs/knowledge/regulators/IS_XCHANGE_AN_EMI.md` (Model: GPT-5.5, Priority: P0)
- Does x-change require an EMI license? → `docs/knowledge/regulators/EMI_LICENSE_REQUIREMENT.md` (Model: External Counsel, Priority: P0)
- Does x-change require OPS registration? → `docs/knowledge/regulators/OPS_REGISTRATION_REQUIREMENT.md` (Model: GPT-5.5, Priority: P0)
- What is the legal characterization of x-change? → `docs/knowledge/regulators/LEGAL_CHARACTERIZATION_SUMMARY.md` (Model: GPT-5.5, Priority: P0)
- What role should BSP authorities play in the architecture? → `docs/knowledge/regulators/BSP_AUTHORITY_ROLE.md` (Model: Human Review, Priority: P1)
- When should external counsel review be required? → `docs/knowledge/regulators/Counsel_ENGAGEMENT_TRIGGER.md` (Model: External Counsel, Priority: P1)
- Why Treasury instead of Wallet? → `docs/knowledge/concepts/TREASURY_VS_WALLET.md` (Model: GPT-5.5, Priority: P1)
- Why Legal Characterization? → `docs/knowledge/concepts/LEGAL_CHARACTERIZATION_VALUE.md` (Model: Human Review, Priority: P1)
- Why Traceability? → `docs/knowledge/architecture/WHY_TRACABILITY.md` (Model: Human Review, Priority: P1)
- What is the Rule of Translation? → `docs/knowledge/architecture/RULE_OF_TRANSLATION_ARTICLE.md` (Model: Human Review, Priority: P1)
- What is an Architectural Invariant? → `docs/knowledge/architecture/ARCHITECTURAL_INVARIANT_DEFINITION.md` (Model: Human Review, Priority: P1)
- How does legal architecture shape package design? → `docs/knowledge/architecture/PACKAGE_DESIGN_IMPACTS.md` (Model: Human Review, Priority: P1)
- How do I add a legal authority? → `docs/knowledge/development/ADD_AUTHORITY_WORKFLOW.md` (Model: GPT-5.5, Priority: P2)
- How do I update the Grammar? → `docs/knowledge/development/UPDATE_GRAMMAR_WORKFLOW.md` (Model: Human Review, Priority: P2)
- How do I write a Legal Decision Record? → `docs/knowledge/development/WRITE_LDR_WORKFLOW.md` (Model: Human Review, Priority: P2)
- How do I create a Knowledge Article? → `docs/knowledge/development/CREATE_KNOWLEDGE_ARTICLE_WORKFLOW.md` (Model: GPT-5.5, Priority: P2)
- How do I map a legal concern to a test? → `docs/knowledge/development/LEGAL_CONCERN_TO_TEST_WORKFLOW.md` (Model: Human Review, Priority: P2)
- How do I preserve uncertainty in documentation? → `docs/knowledge/development/UNCERTAINTY_IN_DOCS_WORKFLOW.md` (Model: Human Review, Priority: P2)

## Recommended hydration phases

### Phase 0 — Research workflow first (P0)

- Create `docs/authorities/RESEARCH_WORKFLOW.md`.
- Do this before authority ingestion.
- This should document how authorities move through:
  - discovery,
  - evaluation,
  - registration,
  - architectural mapping,
  - traceability,
  - adverse review,
  - counsel review.

### Phase 1 — Authority readiness and register seeding (P0)

- Seed `docs/authorities/LEGAL_AUTHORITY_REGISTER.md` with first-priority authorities.
- Maintain source provenance, status, and mapped consequences.

### Phase 2 — First regulatory Knowledge Article (P0)

- Draft `docs/knowledge/regulators/IS_XCHANGE_AN_EMI.md`.
- Update `docs/research/OPEN_QUESTIONS.md`.
- Update `docs/research/ADVERSE_ARGUMENTS.md`.
- Expand `docs/traceability/REGULATORY_TRACEABILITY_MATRIX.md` with corresponding rows.

### Phase 3 — Authority ingestion maturity (P1)

- Continue adding authorities with provenance.
- Preserve pending vs reviewed status with reasons.
- Avoid legal conclusions until mapping and review finish.

### Phase 4 — Counsel review preparation (P1)

- Organize issue bundles for external Philippine banking counsel.
- Prepare adverse argument evidence packets.
- Prepare a review-ready evidence checklist.

## Backlog management fields

Future entries should keep:

- Status
- Maturity
- Stability
- Owner
- Recommended Model
- Last Reviewed
- Next Review Trigger

XLegal should evolve by knowledge events, not merely calendar dates.

Suggested review triggers:

- first BSP authority added
- first external counsel review
- first regulatory discussion
- first architecture change affecting Treasury Position
- first Pay Code production deployment
- first client funds reconciliation design
- first Knowledge Article published
- new adverse argument discovered

## Automation opportunities

The following tasks are good targets for structured automation:

- Document inventory refresh and stale doc detection.
- TODO/TBD/provisional marker scans with intent classification.
- FAQ-to-article gap detection.
- Missing Knowledge Article detection from index.
- Navigation refresh.
- Template conformance checks.
- Traceability readiness checks.
- Stability and Maturity field updates when documents are moved or renamed.
- Stale-link scans.
- Backlog refresh.

Suggested division of labor:

- **AI (GPT-5.5) can assist with:**
  - inventory and scan routines,
  - marker extraction,
  - missing-article and gap detection,
  - navigation checks and template conformance,
  - preliminary stability/maturity updates.
- **Human stewards decide:**
  - document maturity and stability transitions,
  - sequencing decisions,
  - whether a doc should remain Historical.
- **External counsel validates:**
  - legal validity of non-definitive claims,
  - counsel-facing review bundles,
  - high-stakes governance posture.

## Recommended next task

Create `docs/authorities/RESEARCH_WORKFLOW.md`.

Use GPT-5.5 for this task because this workflow defines legal judgment, sequencing,
and review responsibilities.

## Verification

- `docs/HYDRATION_BACKLOG.md` updated to include maturity + stability fields, reordered Phase 0 start, and governance/automation expansion.
- Navigation remains valid at the high level in `README.md` and `docs/README.md`.
- No PHP source, Composer config, or test files were changed.
- No definitive legal conclusions or payment logic were added.
