# Source Evaluation Protocol

This protocol answers one question:

```text
Before any legal authority becomes part of XLegal, how do we determine whether it
is suitable, trustworthy, current, and architecturally useful?
```

XLegal is not trying to become a warehouse of legal materials. It is trying to
become a disciplined legal architecture system. That means source quality matters.
An architecture can only be as trustworthy as the authorities, assumptions, and
interpretive steps it is built upon.

## Why this protocol exists

Legal architecture depends on trustworthy authorities. A design decision about
funds, mandates, settlement instructions, credentials, disclosures, or audit records
should not rest on a vague memory of a rule, an unattributed summary, or an
unreviewed interpretation.

Not all legal sources have equal weight. A constitutional provision, statute, BSP
circular, regulator FAQ, law firm article, academic paper, internal note, and AI
summary may all be useful in different ways. They are not interchangeable.

Architecture should never be built on uncertain legal foundations without saying
that the foundation is uncertain. If a source is provisional, stale, incomplete,
unofficial, jurisdictionally unclear, or awaiting counsel review, the package should
make that visible.

Provenance must always be preserved. Future contributors should be able to trace an
architectural consequence back to the source that supports it, the person or system
that summarized it, the reviewer who checked it, and the date of review.

## Guiding principles

Substance over labels. A source is not useful because it has an impressive name. It
is useful if it actually applies to the legal question and can support the
architecture honestly.

Primary authorities before secondary authorities. The package should prefer
constitutional text, statutes, regulations, official issuances, and judicial
decisions over commentary when determining legal obligations or regulatory
constraints.

Official sources are preferred. Where possible, sources should be collected from
official government, regulator, court, or institutional publications rather than
mirrors, summaries, reposts, or informal copies.

Uncertainty must be documented. If applicability, currency, interpretation, or
factual fit is uncertain, the uncertainty is part of the record.

Every interpretation remains traceable. Summaries, extracted rules, candidate
constraints, legal theories, and architectural consequences should link back to
their source.

Architectural consequences should never outrun the authority itself. A source may
support a question, concern, hypothesis, or review task without supporting a final
conclusion.

## Authority hierarchy

This hierarchy is a discipline for source handling. It does not decide every
conflict, and it does not replace legal analysis. Lower levels may inform higher
levels, but they should not override them.

### Constitutional authorities

Examples:

- Constitution.

Constitutional authorities may affect foundation-level questions about regulatory
power, due process, property rights, institutional authority, or limits on state
action. They should be used carefully and reviewed by humans and counsel before
they shape architecture.

### Statutes

Examples:

- Acts of Congress.

Statutes may create rights, obligations, classifications, penalties, regulatory
powers, or interpretive anchors. Statutory analysis should preserve exact source,
jurisdiction, amendments, effective date, and relationship to implementing
regulations.

### Administrative regulations

Examples:

- BSP Circulars.
- Monetary Board issuances.
- Manuals of Regulations.

Administrative regulations often translate statutory authority into operational
requirements. They may be especially important for x-change because architecture
may need to reflect registration, safeguarding, reporting, governance, disclosure,
or operational risk expectations.

### Official guidance

Examples:

- BSP FAQs.
- BSP advisories.
- Official explanatory memoranda.

Official guidance can clarify regulator expectations, but it should be treated
according to its legal weight. Guidance may inform architecture even when it is not
itself the controlling legal rule.

### Judicial authorities

Examples:

- Supreme Court decisions.

Judicial authorities may interpret statutes, regulations, constitutional
provisions, contractual arrangements, property rights, agency, custody, or other
concepts relevant to the model. Judicial sources should be handled with attention
to jurisdiction, facts, holding, dicta, subsequent treatment, and applicability.

### Secondary authorities

Examples:

- Legal commentaries.
- Journal articles.
- Law firm publications.
- Academic papers.

Secondary sources may help explain, compare, criticize, or contextualize primary
authorities. They may identify risks and arguments. They should not be treated as
binding legal authority.

### Internal working papers

Examples:

- Architectural notes.
- Hypotheses.
- Legal theories.
- AI-generated analysis.

Internal working papers can be useful for organizing thought, but they are not
authority. They should be clearly marked and traced to the sources, facts, or
questions they depend upon.

## Evaluation criteria

Each authority should eventually be evaluated through these concepts. XLegal should
not use numerical scores; legal source evaluation requires judgment, not false
precision.

Authenticity asks whether the source is genuine and complete.

Official source asks whether the source was obtained from a government, regulator,
court, official publisher, or other authoritative location.

Jurisdiction asks where the authority applies and whether that jurisdiction is
relevant to x-change.

Applicability asks whether the source actually bears on the activity, role,
transaction, product behavior, or regulatory question being analyzed.

Currency asks whether the source is current, amended, repealed, superseded, or
limited by later authority.

Completeness asks whether the source has been captured in enough context to avoid
misleading extraction.

Authority level asks where the source sits in the hierarchy and what legal weight
it may carry.

Architectural relevance asks whether the source should shape vocabulary,
invariants, controls, evidence, disclosures, interfaces, tests, or package
boundaries.

Regulatory relevance asks whether the source affects classification, registration,
supervision, reporting, safeguarding, consumer protection, operational risk, or
regulator engagement.

Implementation impact asks whether the source should eventually map to a package,
class, method, event, migration, test, or audit artifact.

Review status asks who has reviewed the source and whether its interpretation is
AI-drafted, human-reviewed, counsel-reviewed, or still only identified.

## Architectural consequence test

Every authority should answer:

```text
What architectural consequence, if any, follows from this authority?
```

An architectural consequence may be a vocabulary change, invariant, prohibited
behavior, required evidence record, disclosure concern, package boundary, test
requirement, operational control, decision record, or open question.

It is acceptable for an authority to have no immediate architectural consequence.
Not every source deserves to shape the system. XLegal should avoid collecting laws
only because they are nearby or interesting.

When a source has no architectural consequence, the register should say so. That
decision is still useful because it prevents future contributors from repeatedly
reopening the same source without new facts.

## Provenance

Every extracted rule, summary, interpretation, and architectural consequence should
preserve:

- Source.
- Publication.
- Jurisdiction.
- Date.
- Version.
- Reviewer.
- Review date.

Provenance is not clerical decoration. It is what lets the ecosystem inspect the
chain between law, interpretation, architecture, implementation, and audit
evidence.

If provenance is missing, the source should not support a strong architectural
claim.

## Review status

Use statuses to show workflow progress without overstating correctness.

Identified means the source may be relevant but has not yet been collected or
reviewed.

Collected means the source has been captured with provenance.

Parsed means the source has been broken into candidate definitions, obligations,
concerns, or interpretive issues.

Summarized means a plain-language summary exists, but the summary may still be
draft or AI-assisted.

Architecturally Mapped means candidate consequences have been linked to grammar,
invariants, characterization, traceability, or implementation artifacts.

Reviewed means a human reviewer has checked the source handling for the package's
current purpose. It does not mean the interpretation is legally correct.

External Counsel Reviewed means qualified external counsel has reviewed the source,
interpretation, or consequence for the relevant purpose.

Archived means the source is no longer active for the current architecture, is
superseded, or is retained only for history.

## AI usage policy

AI may help collect, organize, summarize, normalize, compare, and map sources. It
may identify possible architectural consequences, generate traceability candidates,
surface inconsistencies, and draft open questions.

AI should not be treated as legal counsel. AI-generated summaries and mappings must
remain reviewable drafts until a human accepts them for the package's purpose.

Humans should interpret sources, make architectural decisions, approve conclusions,
and decide when uncertainty is acceptable for a given phase.

External counsel should validate legal reasoning, challenge assumptions, identify
regulatory risks, and advise on high-stakes classification, registration,
disclosure, safeguarding, and engagement questions.

The highest-value AI use in XLegal is not pretending certainty. It is making the
research surface area clearer and the questions sharper.

## What this protocol does not do

This protocol does not replace legal advice.

It does not determine regulatory classification.

It does not establish compliance.

It does not resolve legal disputes.

It does not decide whether x-change is or is not an EMI, OPS, custody arrangement,
escrow arrangement, technology provider, or any other legal category.

It establishes discipline for admitting and evaluating sources before those sources
shape architecture.

## Relationship with other documents

[LEGAL_AUTHORITY_REGISTER.md](./LEGAL_AUTHORITY_REGISTER.md) is where evaluated
sources are registered. This protocol defines how they should be evaluated before
the register becomes authoritative for architecture.

[LEGAL_CHARACTERIZATION.md](../characterization/LEGAL_CHARACTERIZATION.md) uses
registered authorities and open questions to compare candidate characterizations of
x-change.

[LEGAL_THEORIES.md](../characterization/LEGAL_THEORIES.md) uses sources to expose
what the architecture must do if a legal theory applies.

[REGULATORY_TRACEABILITY_MATRIX.md](../traceability/REGULATORY_TRACEABILITY_MATRIX.md)
maps authorities and concerns into invariants, packages, classes, methods, tests,
and audit evidence.

[OPEN_QUESTIONS.md](../research/OPEN_QUESTIONS.md) preserves unresolved issues that
cannot yet be answered from collected authorities, current facts, or reviewed
analysis.

## Operating rule

No source should become architecturally powerful merely because it is available.
Availability is not authority. Authority is not applicability. Applicability is not
implementation. The protocol exists to keep those distinctions visible.
