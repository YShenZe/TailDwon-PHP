const versionModal = document.getElementById('version-modal');
const cancelVersionButton = document.getElementById('cancel-version-button');
const versionChangelog = document.getElementById('version-changelog');

function openVersionModal(version, changelog) {
  versionChangelog.textContent = changelog;
  versionModal.classList.remove('hidden');
}

cancelVersionButton.addEventListener('click', () => {
  versionModal.classList.add('hidden');
});

versionModal.addEventListener('click', (event) => {
  if (event.target === versionModal) {
    versionModal.classList.add('hidden');
  }
});