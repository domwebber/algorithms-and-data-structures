FROM python:3.10-slim as base

RUN pip install pipenv
RUN pip install pytest
RUN pip install pytest-cov
RUN pip install pytest-timer
RUN apt-get update && apt-get install -y --no-install-recommends gcc

COPY Pipfile .
COPY Pipfile.lock .
RUN pipenv install

ENV PATH="/.venv/bin:$PATH"

WORKDIR /usr/src/app

COPY . .

CMD ["pipenv", "run", "test"]