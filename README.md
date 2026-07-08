# XLegal

XLegal is the legal architecture package for the 3neti ecosystem.

It is not a legal opinion, a compliance checklist, or a law library. It is the
place where the ecosystem learns to make legal intent, regulatory constraint,
software architecture, implementation behavior, and audit evidence traceable to
one another.

## Why legal architecture exists

Modern software no longer operates only inside code. It operates inside contracts,
regulatory regimes, user expectations, banking relationships, operational controls,
and audit trails. For ordinary applications, those forces can sometimes sit around
the edge of the system. For x-change, they are part of the system.

If the software moves value, reserves funds, creates settlement instructions,
issues credentials, or represents client-facing balances, then architecture cannot
be separated from legal meaning. A class name, event name, database column, product
label, or user flow may quietly imply a legal theory. If those implications are not
made explicit, the system will still express a legal position. It will simply do so
accidentally.

XLegal exists so the ecosystem does not rely on accidental legal architecture.

## Why x-change cannot separate engineering from regulation

x-change is not merely an interface over transactions. It must reason about roles,
mandates, instructions, reservations, execution, expirations, returns, disclosures,
and evidence. Each of those concepts has both engineering meaning and regulatory
meaning.

An engineering package may ask:

- What state transition is allowed?
- Which command should execute?
- Which balance should be reserved?
- Which event should be journaled?

XLegal asks the companion questions:

- What legal authority or working hypothesis permits this concept?
- What regulatory concern does this state transition create?
- What architectural invariant must never be violated?
- What evidence would future counsel, auditors, or regulators need to inspect?

The answer should not live only in someone's memory, a private chat, or a one-time
legal memo. It should become part of the architecture.

## Why this package exists

XLegal provides the vocabulary and traceability spine for legal reasoning inside
3neti. Its work is constitutional: it names the concepts the ecosystem is allowed
to use, records why those concepts exist, marks what remains uncertain, and gives
future engineering packages a way to prove that implementation follows intent.

The package should help future contributors avoid three failure modes:

1. Building features whose legal assumptions were never named.
2. Using product vocabulary that imports unwanted regulatory meaning.
3. Treating legal review as a late-stage approval instead of an architectural input.

The package is documentation-first because the first implementation problem is not
code. It is shared understanding.

## Relationship to engineering packages

XLegal should sit upstream of implementation packages. It does not execute treasury,
settlement, payment, custody, escrow, or transfer logic. Instead, it defines the
legal grammar that implementation packages may later map to.

Future packages should be able to trace their behavior through a chain like this:

```text
Business Requirement
-> Legal Authority or Open Question
-> Regulatory Constraint
-> Architectural Invariant
-> Package
-> Class
-> Method
-> Test
-> Audit Evidence
```

That chain is the point. It means the system can explain itself.

## Traceability as architecture

Traceability is not administrative overhead. It is an architectural property.

A system that can show why a concept exists, which authority or hypothesis supports
it, which invariant constrains it, and which test protects it is easier to review,
easier to change, and harder to misrepresent. A system without traceability becomes
fragile precisely when facts, regulations, or product requirements change.

XLegal treats uncertainty as a first-class artifact. Open questions are not defects.
They are part of the model until they are resolved by research, counsel, regulatory
engagement, or architectural decision.

## Current posture

This package is an early constitutional foundation. It makes no definitive BSP
opinion, no EMI conclusion, and no claim that any factual pattern is settled. It
uses Treasury and Settlement vocabulary as the current architectural direction, and
it records that direction as something to be reviewed rather than something beyond
challenge.

## Documentation map

The documentation is organized as a legal architecture library:

- [Compass](docs/compass/X_LEGAL_COMPASS.md): governing philosophy and legal
  architecture posture.
- [Non-goals](docs/compass/NON_GOALS.md): boundaries of what XLegal does not do.
- [Architecture](docs/architecture/LEGAL_ARCHITECTURE.md): working legal model for
  Treasury and Settlement concepts.
- [Implementation plan](docs/architecture/IMPLEMENTATION_PLAN.md): phased plan for
  building the legal knowledge system.
- [Grammar](docs/grammar/LEGAL_GRAMMAR.md): canonical concept relationships.
- [Rule of Translation](docs/grammar/RULE_OF_TRANSLATION.md): discipline for moving
  from source availability to authority, applicability, architecture, and
  implementation.
- [Authorities](docs/authorities/LEGAL_AUTHORITY_REGISTER.md): structured register
  for future legal authorities.
- [Characterization](docs/characterization/LEGAL_CHARACTERIZATION.md): candidate
  answers to "what is x-change, legally?"
- [Legal theories](docs/characterization/LEGAL_THEORIES.md): architectural
  consequences if candidate theories apply.
- [Traceability matrix](docs/traceability/REGULATORY_TRACEABILITY_MATRIX.md):
  design objective for mapping law, architecture, code, tests, and audit evidence.
- [Knowledge](docs/knowledge/README.md): institutional legal memory and living
  position-paper system.
- [Research](docs/research/OPEN_QUESTIONS.md): open questions and adverse analysis.
- [Decisions](docs/decisions/README.md): Legal Decision Records.
- [Hydration backlog](docs/HYDRATION_BACKLOG.md): documentation maturity, hydration
  priorities, and missing Knowledge Articles.

The work begins here: name the concepts, trace the assumptions, preserve the
questions, and let future code inherit discipline instead of ambiguity.
