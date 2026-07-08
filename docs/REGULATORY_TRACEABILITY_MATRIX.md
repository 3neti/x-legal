# Regulatory Traceability Matrix

| ID | Legal/Regulatory Source | Requirement or Concern | Architectural Consequence | Affected Package/Component | Status | Open Questions |
| --- | --- | --- | --- | --- | --- | --- |
| R-001 | Placeholder authority source | Confirm whether principal mandate language is sufficient for treasury role | Clarify interface semantics and evidence links in `TreasuryMandate` | `src/Contracts/TreasuryMandate.php` | Draft | What language is required for explicit limitation to settlement only? |
| R-002 | Placeholder requirement | Avoid implying stored-value behavior from payment credentials | Ensure `PayCodeInstrument` is modeled as redemption credential only | `src/Contracts/PayCodeInstrument.php` | Draft | Which facts indicate stored-value risk in product docs? |
| R-003 | Placeholder obligation | Ensure fund reservations are auditable and time-bound | Add robust reservation lifecycle in `LienRegistry` | `src/Contracts/LienRegistry.php` | Draft | What constitutes valid reservation completion evidence? |
| R-004 | Placeholder disclosure requirement | Prevent client misconception around money custody and settlement role | Add wording anchors in `docs/LEGAL_GRAMMAR.md` and `docs/OPEN_QUESTIONS.md` | package docs | Draft | Which exact disclosure set is required before release? |
| R-005 | Placeholder segregation requirement | Confirm treasury and operating separation model | Enforce invariants around `ClientFundsLedger` usage | `src/Contracts/ClientFundsLedger.php` | Draft | What are the minimum technical segregation controls? |

## Matrix process

- Add real regulatory references in consultation with counsel.
- Keep each row linked to one or more `LegalAuthority` and `RegulatoryConstraint` records.
- Move rows from `Draft` only after legal review.
