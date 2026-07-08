# XLegal Compass

XLegal is the legal Compass for the 3neti ecosystem.

Its purpose is to help the ecosystem think legally before it implements technically.
It does not replace lawyers, regulators, or formal legal analysis. It creates the
architecture in which legal meaning can be named, challenged, traced, reviewed, and
carried into software without being flattened into product shorthand.

## Why legal architecture matters

Software systems increasingly make claims about the world. They do not only store
data or execute commands. They define roles, allocate rights, trigger obligations,
create records, surface disclosures, and shape user expectations.

When a system concerns funds, settlement, credentials, or regulated infrastructure,
those claims may matter legally. The architecture must therefore answer more than
"does the code work?" It must also ask:

- What role does the system appear to perform?
- What relationship does it create with the principal?
- What does the user reasonably believe the system is doing?
- Which regulatory concerns could this design trigger?
- What evidence proves the design behaved as intended?

Legal architecture exists to keep those questions close to the code, not buried
after it.

## Philosophy

XLegal begins from a simple premise: labels do not save architecture. Substance
does.

Calling something a credential, a mandate, a reservation, or a settlement
instruction is useful only if the system's behavior, records, interfaces, and user
communications support that meaning. Legal architecture therefore has to operate at
the level of facts. It must care about language, but it cannot be satisfied by
language alone.

The package should cultivate a habit of disciplined uncertainty. When a conclusion
is open, the document should say so. When a term is being tested, the model should
mark it as provisional. When a risk argument is plausible, the architecture should
preserve the argument instead of hiding it.

## Scope

XLegal is responsible for:

- Legal grammar for Treasury and Settlement concepts.
- Proposed architectural invariants with review status.
- Traceability between legal authorities, constraints, design decisions, package
  artifacts, and tests.
- Legal decision records that explain major vocabulary and architecture choices.
- Open questions that require research, counsel, or regulatory engagement.
- Adversarial reasoning about how the system could be characterized.

XLegal is not responsible for implementing money movement, ledger operations,
payment processing, custody, escrow, settlement execution, or product workflows.

## Non-goals

XLegal does not:

- Provide legal advice.
- Conclude whether x-change is or is not an EMI.
- Conclude whether any registration is or is not required.
- Produce a final BSP opinion.
- Replace external Philippine banking counsel.
- Convert unsettled questions into product certainty.
- Use implementation convenience as evidence of legal correctness.

## Guiding principles

1. Substance over labels.
2. Legal architecture before product acceleration.
3. No hidden wallet semantics.
4. Every peso must have a principal-facing explanation.
5. Every Treasury Position must be supported by a mandate or identified open question.
6. Every reservation must be evidenced and time-bounded.
7. Pay Code must be analyzed as a credential for an instruction, not assumed to be value.
8. Uncertainty must be documented where future implementers will see it.
9. Adverse arguments are design inputs, not embarrassments.
10. Traceability must reach the code that carries the behavior.

## Relationship with engineering

Engineering packages should treat XLegal as a source of architectural constraints,
not as an optional appendix. The goal is not to slow engineering down. The goal is
to prevent engineering from unknowingly creating legal facts that the organization
cannot defend.

When future code introduces a class, command, event, state machine, migration, or
test touching Treasury and Settlement behavior, it should eventually be traceable
back to XLegal artifacts:

```text
Legal grammar
-> Decision record
-> Regulatory constraint
-> Architectural invariant
-> Implementation artifact
-> Test or audit record
```

That trace is how the ecosystem remembers why it was built this way.

## Relationship with regulators

XLegal is not a communications package for regulators. It is an internal discipline
for building systems that can be explained if regulators ask hard questions.

The package should preserve the kind of record that makes regulatory engagement
more honest:

- What the system intended.
- What risks were known.
- Which adverse arguments were considered.
- Which facts were engineered to support the intended characterization.
- Which questions remained open at each stage.

Regulatory engagement should never depend on reconstructing architectural intent
from code after the fact.

## Relationship with external counsel

External counsel should be treated as a reviewer of the legal architecture, not only
as a late-stage approver of finished product behavior.

XLegal should make counsel review more effective by presenting:

- The working model.
- The vocabulary being used.
- The factual assumptions.
- The open questions.
- The adverse arguments.
- The traceability between concerns and technical controls.

Counsel may confirm, reject, refine, or reframe the model. The package should be
ready to change when that happens.

## Evolution strategy

XLegal should evolve by decision records and traceable revisions. Major vocabulary
choices, architectural shifts, and risk posture changes should be written down as
decisions with status. A decision can be proposed, accepted, superseded, or rejected.

The package should become more precise over time:

1. Start with grammar and hypotheses.
2. Attach legal authorities.
3. Extract regulatory constraints.
4. Convert constraints into proposed invariants.
5. Map invariants to code and tests.
6. Submit the model to adverse review.
7. Refine with counsel and regulatory feedback.

The goal is not to freeze a legal theory early. The goal is to make the theory
visible enough to improve it.

## AI-assisted legal architecture

AI can help this package by drafting, comparing, summarizing, challenging, and
organizing legal architecture artifacts. AI is especially useful for surfacing
inconsistencies, proposing trace links, generating adverse arguments, and keeping
documents coherent as the ecosystem grows.

AI must not be treated as counsel. AI outputs should be marked as drafts,
hypotheses, or analysis aids until reviewed by humans with the right authority.

The highest-value use of AI in XLegal is not pretending to answer legal questions
definitively. It is helping the ecosystem ask sharper questions earlier.
