# Hydration Backlog

This backlog prevents documentation growth from outrunning understanding. It tracks which
documents are foundational, which are intentional templates, which are still skeletons, and
which are navigational artifacts that should be maintained as the taxonomy evolves.

The objective is to preserve maturity visibility. A placeholder should not be mistaken for
completed legal analysis.

## Current hydration classification

| Document | Category | Current State | Hydration Need | Priority | Recommended Model | Notes |
| --- | --- | --- | --- | --- | --- | --- |
| `docs/README.md` | Generated or Navigational / Maintain Automatically | Consolidated directory map and maintenance guidance | Keep aligned with added/renamed docs | P2 | Human Review | Regenerates automatically through editorial discipline |
| `docs/compass/X_LEGAL_COMPASS.md` | Constitutional / Mature | Full philosophical and governance framing | Low-value stabilization only | P2 | Human Review | Central source of direction |
| `docs/compass/NON_GOALS.md` | Constitutional / Mature | Clear boundary controls and anti-drift guidance | Keep aligned with scope changes | P2 | Human Review | Already stable for current stage |
| `docs/architecture/LEGAL_ARCHITECTURE.md` | Constitutional / Mature | Working legal model with explicit caveats | Refine model definitions as architecture settles | P1 | Spark / Human Review | Major anchor for future legal reasoning |
| `docs/architecture/ARCHITECTURAL_INVARIANTS.md` | Constitutional / Mature | Proposed invariants with explicit review posture | Convert to traceable invariants over time | P1 | Spark / Human Review | Proposed state already preserved |
| `docs/architecture/IMPLEMENTATION_PLAN.md` | Constitutional / Mature | Defined legal knowledge implementation phases | Hydrate with execution milestones | P2 | Human Review | Strong baseline for delivery planning |
| `docs/grammar/LEGAL_GRAMMAR.md` | Constitutional / Mature | Canonical relationship grammar | Expand examples as concepts stabilize | P1 | Spark / Human Review | Good anchor for cross-team understanding |
| `docs/grammar/RULE_OF_TRANSLATION.md` | Constitutional / Mature | Core translation doctrine in place | Add examples during audits and reviews | P2 | Human Review | Important guardrail to keep legal reasoning traceable |
| `docs/authorities/LEGAL_AUTHORITY_REGISTER.md` | Template / Needs Population | Register schema is defined | Add real entries and mappings | P0 | Human Review / External Counsel | High impact once authorities begin onboarding |
| `docs/authorities/SOURCE_EVALUATION_PROTOCOL.md` | Constitutional / Mature | Methodology fully described | Keep synced to actual intake process | P1 | Human Review | Supports quality bar for authority onboarding |
| `docs/authorities/bsp/README.md` | Skeleton / Needs Hydration | Folder purpose only | Add future BSP-specific indexing discipline | P2 | Human Review / Spark | Intended as scaffold |
| `docs/authorities/statutes/README.md` | Skeleton / Needs Hydration | Folder purpose only | Add future statutory intake guidance | P2 | Human Review / Spark | Intended as scaffold |
| `docs/authorities/constitutional/README.md` | Skeleton / Needs Hydration | Folder purpose only | Add constitutional-questions guidance when used | P2 | Human Review / Spark | Intended as scaffold |
| `docs/authorities/secondary/README.md` | Skeleton / Needs Hydration | Folder purpose only | Add secondary-source workflow and constraints | P2 | Human Review / Spark | Intended as scaffold |
| `docs/characterization/LEGAL_CHARACTERIZATION.md` | Constitutional / Mature | Candidate legal characterizations documented | Hydrate with evidence-backed reasoning as intake deepens | P1 | GPT-5.5 / External Counsel | Foundation for regulatory framing |
| `docs/characterization/LEGAL_THEORIES.md` | Constitutional / Mature | Theory-to-consequence mapping established | Add stronger constraints and counter-evidence | P1 | GPT-5.5 / External Counsel | Important for architecture-to-legal alignment |
| `docs/traceability/REGULATORY_TRACEABILITY_MATRIX.md` | Template / Needs Population | Design objective + starter rows | Add matrix rows and status progression | P0 | Spark / Human Review | Key operational bridge document |
| `docs/research/ADVERSE_ARGUMENTS.md` | Constitutional / Mature | Canonical adverse framing exists | Expand with updated arguments as facts evolve | P1 | GPT-5.5 / Human Review | Valuable for risk pre-mortem |
| `docs/research/OPEN_QUESTIONS.md` | Constitutional / Mature | Open questions registered and categorized | Resolve, defer, or archive as decisions emerge | P1 | Human Review / External Counsel | High value to monitor unresolved risk |
| `docs/decisions/README.md` | Generated or Navigational / Maintain Automatically | Decision index with single entry | Update as new decisions land | P2 | Human Review | Requires periodic maintenance |
| `docs/decisions/0001-treasury-over-wallet.md` | Constitutional / Mature | ADR for major terminology shift | Keep as reference and potential supersession tracking | P2 | Human Review | Stable as foundational architecture choice |
| `docs/knowledge/README.md` | Constitutional / Mature | Knowledge subsystem framing complete | Add new category-specific usage notes over time | P2 | Human Review | Should remain current navigation hub |
| `docs/knowledge/KNOWLEDGE_SYSTEM.md` | Constitutional / Mature | Philosophy and traceability rationale established | Add examples as governance use increases | P2 | Human Review | Core institutional memory document |
| `docs/knowledge/KNOWLEDGE_GOVERNANCE.md` | Constitutional / Mature | Lifecycle model and review posture defined | Tie to real knowledge article revisions | P1 | Human Review / External Counsel | Needs operational adoption |
| `docs/knowledge/KNOWLEDGE_TEMPLATE.md` | Template / Needs Population | Canonical article format defined | Populate first article set and reduce divergence | P0 | Spark / Human Review | Foundation for consistent article quality |
| `docs/knowledge/FAQ_INDEX.md` | Template / Needs Population | Question index declared without answers | Hydrate into real articles over time | P0 | GPT-5.5 / Human Review | Direct source for backlog generation |
| `docs/knowledge/constitutional/README.md` | Skeleton / Needs Hydration | Folder-level placeholder | Populate constitutional knowledge category when first article arrives | P3 | Human Review | Future-ready placeholder |
| `docs/knowledge/concepts/README.md` | Skeleton / Needs Hydration | Folder-level placeholder | Add concept article conventions + first drafts | P1 | GPT-5.5 / Human Review | Useful to prevent concept drift |
| `docs/knowledge/architecture/README.md` | Skeleton / Needs Hydration | Folder-level placeholder | Add architecture article conventions + cross-links | P1 | GPT-5.5 / Human Review | Needed once first architecture articles land |
| `docs/knowledge/regulators/README.md` | Skeleton / Needs Hydration | Folder-level placeholder | Add regulator-facing knowledge scaffolding | P1 | GPT-5.5 / External Counsel | High for future engagement readiness |
| `docs/knowledge/litigation/README.md` | Skeleton / Needs Hydration | Folder-level placeholder | Add adversarial and dispute knowledge structure | P3 | GPT-5.5 / External Counsel | Useful when dispute/risk posture matures |
| `docs/knowledge/development/README.md` | Skeleton / Needs Hydration | Folder-level placeholder | Expand into contributor workflow articles | P2 | Human Review / Spark | Supports maintainability |
| `docs/HYDRATION_BACKLOG.md` | Constitutional / Mature | Lifecycle inventory complete | Regenerate after major taxonomy updates | P2 | Human Review | New operational governance artifact |

## Skeleton and placeholder scan

We found intentional markers across the documentation set:

- `TBD` in `docs/authorities/LEGAL_AUTHORITY_REGISTER.md` and `docs/knowledge/KNOWLEDGE_TEMPLATE.md`
  - Interpretation: intentional placeholders for future authority rows and article fields.
- `draft` in `docs/architecture/IMPLEMENTATION_PLAN.md` and `docs/traceability/REGULATORY_TRACEABILITY_MATRIX.md`
  - Interpretation: draft status signals provisional sequencing and placeholder rows, not completion.
- `proposed` in `docs/decisions/0001-treasury-over-wallet.md`, `docs/architecture/ARCHITECTURAL_INVARIANTS.md`, and `docs/traceability/REGULATORY_TRACEABILITY_MATRIX.md`
  - Interpretation: intentional provisional language required at this stage.
- `under analysis` and `pending` terms in `docs/architecture/IMPLEMENTATION_PLAN.md`, `docs/architecture/ARCHITECTURAL_INVARIANTS.md`, and `docs/traceability/REGULATORY_TRACEABILITY_MATRIX.md`
  - Interpretation: appropriate process state labels until counsel and operational feedback are available.
- `future` in `docs/README.md`, `docs/authorities/*` READMEs, and `docs/knowledge/*/README.md`
  - Interpretation: intended roadmap language for upcoming ingestion and article families.

No marker was found that should be treated as urgent correction; each occurrence is aligned
with the package's intentional "provisional but explicit" doctrine.

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
- How do I add a legal authority? → `docs/knowledge/development/ADD_AUTHORITY_WORKFLOW.md` (Model: Spark, Priority: P2)
- How do I update the Grammar? → `docs/knowledge/development/UPDATE_GRAMMAR_WORKFLOW.md` (Model: Human Review, Priority: P2)
- How do I write a Legal Decision Record? → `docs/knowledge/development/WRITE_LDR_WORKFLOW.md` (Model: Human Review, Priority: P2)
- How do I create a Knowledge Article? → `docs/knowledge/development/CREATE_KNOWLEDGE_ARTICLE_WORKFLOW.md` (Model: Spark, Priority: P2)
- How do I map a legal concern to a test? → `docs/knowledge/development/LEGAL_CONCERN_TO_TEST_WORKFLOW.md` (Model: Human Review, Priority: P2)
- How do I preserve uncertainty in documentation? → `docs/knowledge/development/UNCERTAINTY_IN_DOCS_WORKFLOW.md` (Model: Human Review, Priority: P2)

## Recommended hydration phases

### Phase 1 — Inventory and Authority Readiness (P0)

- Finalize this hydration backlog and run it as a recurring process.
- Run protocol review against current authority workflow.
- Prepare legal authority register schema for the first ingestion batch.
- Standardize research workflow responsibilities.

### Phase 2 — First Regulatory Knowledge Article (P0)

- Add `docs/knowledge/regulators/IS_XCHANGE_AN_EMI.md`.
- Update `docs/research/OPEN_QUESTIONS.md`.
- Update `docs/research/ADVERSE_ARGUMENTS.md`.
- Expand `docs/traceability/REGULATORY_TRACEABILITY_MATRIX.md` with corresponding rows.

### Phase 3 — Authority Ingestion (P1)

- Seed priority BSP/statutory sources.
- Register provenance, review status, and evidence links.
- Classify authority outcomes by review status and consequence.
- Keep conclusions marked as hypotheses until mapped and reviewed.

### Phase 4 — Architecture Alignment (P1)

- Map obligations to invariants.
- Map invariants to packages, classes, methods, and tests.
- Identify and annotate architecture gaps in the Knowledge System.

### Phase 5 — Counsel Review Preparation (P1)

- Bundle legal questions for external Philippine banking counsel.
- Prepare adverse argument packets and evidence checklists.
- Prepare engagement-ready knowledge summary pages and matrix views.

## Automation opportunities

The following tasks are good targets for structured automation:

- Document inventory refresh and stale doc detection.
- TODO/TBD/placeholder scan with intentional-marker flags.
- FAQ-to-article gap detection from `docs/knowledge/FAQ_INDEX.md`.
- Navigation validation in `docs/README.md` and `README.md`.
- Template conformance checks (Decision records, knowledge articles, authority rows).
- Traceability readiness checks (authority references, matrix linkage, revision notes).

Candidate models:

- Spark: inventory, scan, indexing, link checks, consistency templates.
- GPT-5.5: substantive legal architecture reasoning and first drafts of Knowledge Articles.
- External Counsel: legal validation, high-stakes risk posture, regulatory interpretation.
- Human Review: editorial governance, taxonomy quality, and production readiness.

## Recommended next task

Create `docs/authorities/RESEARCH_WORKFLOW.md` to define end-to-end movement from
authority discovery through evaluation, register entry, architectural mapping, traceability
linking, and counsel review.

## Verification

- Markdown files inspected: 30
- Broken link check: performed manually on primary navigation paths in `docs/README.md` and
  `README.md` links; no immediate missing references found.
- New file created: `docs/HYDRATION_BACKLOG.md`.
- Files updated: `docs/README.md`, `README.md`.
- PHP source, Composer config, and tests unchanged.
