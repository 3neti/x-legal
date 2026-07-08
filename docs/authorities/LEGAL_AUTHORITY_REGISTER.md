# Legal Authority Register

The Legal Authority Register exists before authority ingestion so future legal
research remains structured.

XLegal should not become a folder of copied sources, loose notes, or disconnected
quotes. Every authority should enter the package with provenance, review status,
summary, architectural relevance, and traceability links.

This register is intentionally empty of real authorities at this stage. Placeholder
examples are marked `TBD`.

## Registration format

Each authority should use the following fields:

```text
Authority ID:
Title:
Jurisdiction:
Authority Type:
Source:
Status:
Review Status:
Summary:
Key Definitions:
Potential Architectural Consequences:
Affected Packages:
Open Questions:
Counsel Review Notes:
Traceability Links:
```

## Field guidance

Authority ID should be stable and short, such as `BSP-TBD-001` or `STAT-TBD-001`
until the source taxonomy matures.

Title should identify the authority without editorializing.

Jurisdiction should state the applicable jurisdiction or `TBD` if not yet verified.

Authority Type should distinguish statute, circular, regulation, guidance, case,
contract, constitutional source, secondary source, counsel note, or internal
analysis.

Source should identify where the authority can be found. Do not rely on memory or
private chat as the source of record.

Status should indicate whether the authority is candidate, active, superseded,
archived, or rejected.

Review Status should indicate whether the summary is AI-drafted, human-reviewed,
counsel-reviewed, or regulator-confirmed.

Summary should be short and non-conclusive until reviewed.

Key Definitions should capture terms that may affect architecture.

Potential Architectural Consequences should state what the system may need to
preserve, avoid, evidence, disclose, or test if the authority applies.

Affected Packages should identify current or future packages that may need to map
to this authority.

Open Questions should preserve uncertainty rather than collapsing it into a false
answer.

Counsel Review Notes should remain empty until reviewed by the appropriate legal
adviser.

Traceability Links should connect to matrix rows, invariants, decisions, package
artifacts, and tests.

## Placeholder examples

| Authority ID | Title | Jurisdiction | Authority Type | Status | Review Status |
| --- | --- | --- | --- | --- | --- |
| BSP-TBD-001 | TBD BSP authority | Philippines | TBD | Candidate | Not reviewed |
| STAT-TBD-001 | TBD statute | Philippines | TBD | Candidate | Not reviewed |
| CONST-TBD-001 | TBD constitutional source | Philippines | TBD | Candidate | Not reviewed |
| SEC-TBD-001 | TBD secondary source | TBD | TBD | Candidate | Not reviewed |

## Operating rule

No authority should be treated as controlling merely because it appears in this
register. Inclusion means it is relevant enough to analyze. Status and review notes
determine how much weight the ecosystem should give it.
