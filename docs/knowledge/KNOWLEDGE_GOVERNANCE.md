# Knowledge Governance

Knowledge Articles are living legal position papers.

They should evolve as research, architecture, counsel review, regulatory
discussion, and operational experience evolve. A Knowledge Article is not final
because it has been written. It is current only to the extent its sources, facts,
review status, and revision history support it.

## Lifecycle

The usual lifecycle is:

```text
Research
-> Human Review
-> Architecture Review
-> External Counsel Review
-> Regulatory Discussion
-> Operational Experience
-> Revision
```

Not every article will pass through every stage immediately. The lifecycle is a
governance map, not a publication gate for every draft.

## Research

Research identifies the question, candidate authorities, related decisions, open
questions, and possible architectural consequences.

AI may assist at this stage by organizing sources, proposing summaries, surfacing
alternative views, and drafting traceability links.

## Human review

Human review checks whether the article is understandable, properly scoped, honest
about uncertainty, and aligned with current product and architecture facts.

Human review does not make an article legally final.

## Architecture review

Architecture review asks whether the article correctly reflects how the system is
or should be built.

It should identify affected packages, classes, tests, invariants, events, journals,
records, and operational controls.

## External counsel review

External counsel review is required before relying on high-stakes legal reasoning
for classification, registration, disclosures, client-funds treatment, regulatory
engagement, or material product decisions.

Counsel may confirm, reject, qualify, or reframe the article. Those changes should
be preserved in revision history.

## Regulatory discussion

If regulators provide formal or informal feedback, Knowledge Articles should be
updated to reflect what was asked, represented, clarified, challenged, or left
unresolved.

Regulatory discussion should not be reconstructed from memory when the architecture
is later reviewed.

## Operational experience

Real operations may reveal facts that documents did not anticipate.

Knowledge Articles should be revised when incidents, edge cases, partner
requirements, support issues, audits, or implementation realities change the
analysis.

## Revision

Revision should preserve why the article changed.

A revision may update the current position, add a contrary view, supersede a prior
assumption, link a new authority, or identify a new implementation consequence.

## Editorial invariant

Every substantive documentation change shall include a review of the Knowledge
System.

This does not require changing the Knowledge System every time. It means the author
should ask whether the change affects an existing or future Knowledge Article,
question index, legal position, traceability link, or revision history.
