FROM python:3.10-slim as base

COPY Pipfile .
COPY Pipfile.lock .

RUN pip install pipenv && \
  pip install pytest && \
  pip install pytest-cov && \
  pip install pytest-timer && \
  apt-get update && \
  apt-get install -y --no-install-recommends gcc && \
  pipenv install

ENV PATH="/.venv/bin:$PATH"
WORKDIR /usr/src/app

COPY . .

CMD ["pipenv", "run", "test"]
