from ...src.ProjectEuler.Problem5 import smallestMultiple
import pytest


@pytest.mark.skip(reason="no way of currently testing this")
def test_reaches_answer():
    assert smallestMultiple() == 232792560
