# Rule of Translation

XLegal exists to preserve the transitions between legal material and software
implementation.

Those transitions are easy to collapse. A source is found, someone summarizes it,
an architecture decision is made, and code follows. If the intermediate reasoning
is not preserved, future contributors cannot tell whether the architecture rests on
authority, assumption, convenience, or misunderstanding.

The Rule of Translation prevents that collapse.

## Translation chain

```text
Availability
-> Authority
-> Applicability
-> Architecture
-> Implementation
```

No layer should be skipped.

## Availability

Availability means a source exists and can be accessed.

A circular, statute, article, memo, FAQ, speech, or internal note may be available.
Availability alone says nothing about legal weight, relevance, currency, or
architectural consequence.

Availability is the beginning of evaluation, not the end.

## Authority

Authority asks whether the available source has legal or interpretive weight.

Some sources bind. Some guide. Some explain. Some merely suggest. Some are useful
only as adverse arguments or research prompts.

The question at this stage is not yet "what should we build?" The question is
"what kind of source is this, and how much weight can it carry?"

## Applicability

Applicability asks whether the authority actually applies to the facts, role,
product behavior, transaction structure, jurisdiction, and time period being
analyzed.

An authority may be real and important but still not apply to a particular feature
or architecture decision. Applicability requires factual judgment.

## Architecture

Architecture asks what design consequence follows if the authority applies.

The consequence may be a vocabulary rule, invariant, package boundary, state
transition, evidence requirement, disclosure concern, decision record, test target,
or open question.

Some authorities may have no immediate architectural consequence. That is an
acceptable result.

## Implementation

Implementation asks how architecture becomes code, tests, workflows, records,
controls, and audit evidence.

Implementation should not leap directly from source availability. It should inherit
a traceable chain of evaluation.

## The Rule of Translation

Availability is not Authority.

Authority is not Applicability.

Applicability is not Architecture.

Architecture is not Implementation.

Every transition requires human judgment.

## Why this rule matters

XLegal preserves the reasoning between layers so future reviewers can understand
why implementation behaves as it does.

Without this rule, the ecosystem may overbuild from weak sources, ignore strong
sources, misapply real authorities, or turn legal uncertainty into software fact.

With this rule, the architecture can say:

```text
We found this source.
We assessed its authority.
We evaluated applicability.
We identified the architectural consequence.
We implemented only what the architecture justified.
```

That is the discipline XLegal is meant to preserve.
